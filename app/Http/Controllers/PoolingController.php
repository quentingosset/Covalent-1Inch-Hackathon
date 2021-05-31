<?php

namespace App\Http\Controllers;
use Akaunting\Money\Money;
use App\Models\Hackhaton;
use App\Models\Pool;
use App\Models\PoolContract;
use App\Models\Token;
use Illuminate\Routing\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;

class PoolingController extends Controller
{
    /**
     * Return a list of all Pools assets
     *
     * @return \Illuminate\View\View
     */
    public function assetsAllPools()
    {
        $response_panecake = Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/56/networks/pancakeswap_v2/assets/');
        $response_uniswap = Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/1/networks/uniswap_v2/assets/');
        return view('pools', ['pools_assets_panecake' => $response_panecake, 'pools_assets_uniswap' => $response_uniswap]);
    }

    /**
     * Return a list of all Pools assets
     *
     * @return \Illuminate\View\View
     */
    public function dex(Request $request, $network, $dex)
    {
        switch($dex){
            case 'uniswap':
                $asset = Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/1/networks/uniswap_v2/assets/?page-size=9999');
                $general_data = $this->dex_general_information($asset['data']['items']);
                $general_data = array_merge($general_data, ["name" => "Uniswap", "description" => "A fully decentralized protocol for automated liquidity provision on Ethereum.","icon" => "https://assets.bit2me.com/assets/images/crypto-icons/v5/uni-circle-solid-default.svg"]);
                break;
            case '1inch':
                //$general_data = $this->get_1inch_pool($network);
                $general_data = [];
                $general_data = array_merge($general_data, ["name" => "1Inch", "description" => "DeFi / DEX aggregator on Ethereum &amp; Binance Smart Chain","icon" => "https://www.crypto-nation.io/cn-files/uploads/2021/01/1inch-Logo.png"]);
                break;
        }
        $general_data = array_merge($general_data,["network" => $network]);
        return view('dex/general', ['general_data' => $general_data]);
    }

    /**
     * Return a list of all Pools assets
     *
     * @return \Illuminate\View\View
     */
    public function dex_pools(Request $request, $dex)
    {
        switch($dex){
            case 'uniswap':
                $asset = Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/1/networks/uniswap_v2/assets/?page-size=9999');
                $general_data = $this->dex_general_information($asset['data']['items']);
                $general_data = array_merge($general_data, ["name" => "Uniswap", "description" => "A fully decentralized protocol for automated liquidity provision on Ethereum.","icon" => "https://assets.bit2me.com/assets/images/crypto-icons/v5/uni-circle-solid-default.svg"]);
                break;
            case '1inch':
                $general_data = [];
                $general_data = array_merge($general_data, ["name" => "1Inch", "description" => "DeFi / DEX aggregator on Ethereum &amp; Binance Smart Chain","icon" => "https://www.crypto-nation.io/cn-files/uploads/2021/01/1inch-Logo.png"]);
                break;
        }
        return view('dex/pools', ['general_data' => $general_data]);
    }

    private function dex_general_information($items){
            $i = $total_liquidity_quote = $volume_24h_quote = $fee_24h_quote = $swap_count_24h = 0;
            $pools = collect($items);
            $tokens = collect();
            $sizePair = $pools->count();
            $topPools = $pools->sortByDesc('total_liquidity_quote');
            foreach ($pools as $item){
                if($item['total_liquidity_quote'] >= 1000){
                    $total_liquidity_quote += $item['total_liquidity_quote'];
                    $volume_24h_quote += $item['volume_24h_quote'];
                    $fee_24h_quote += $item['fee_24h_quote'];
                    $swap_count_24h += $item['swap_count_24h'];
                    $tokens->push((object)['id' => $i, 'name' => $item['token_0']['contract_ticker_symbol'], 'logo_url' => $item['token_0']['logo_url']]);
                    $tokens->push((object)['id' => $i, 'name' => $item['token_1']['contract_ticker_symbol'], 'logo_url' => $item['token_1']['logo_url']]);
                    $i++;
                }
            }
            return [
                'total_pair' => $sizePair,
                'total_liquidity_quote' => $total_liquidity_quote,
                'volume_24h_quote' => $volume_24h_quote,
                'fee_24h_quote' => $fee_24h_quote,
                'swap_count_24h' => $swap_count_24h,
                'tokens' => $tokens->mapWithKeys(function($token, $key) {return [$token->id => $token];}),
                'totalActivePool' => $topPools->filter(function ($pool, $key) {
                    return $pool['total_liquidity_quote'] > 0;
                })->count(),
                'totalEmptyPool' => $topPools->filter(function ($pool, $key) {
                    return $pool['total_liquidity_quote'] == 0;
                })->count(),
                'topPools' => $topPools->take(50)->values(),
                'pools' => $pools
            ];
    }

    private function get_1inch_pool($network){
        $pool_contracts = PoolContract::all()->where('dex','==','1inch');
        foreach ($pool_contracts as $pool_contract){
            $pools = collect(Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/1/events/topics/'.$pool_contract->topic.'/?starting-block='.$pool_contract->last_block.'&ending-block=latest&page-size=9999999')['data']['items']);
            foreach ($pools as $pool){
                Pool::updateOrCreate(
                    [
                        'address' => $pool['decoded']['params'][0]['value'],
                        'network' => $network,
                        'dex' => '1inch',
                        'token_0' => $pool['decoded']['params'][1]['value'],
                        'token_1' => $pool['decoded']['params'][2]['value'],
                    ]
                );
                Token::updateOrCreate(
                    [
                        'network' => $network,
                        'contract_address' => $pool['decoded']['params'][1]['value'],
                    ]
                );
                Token::updateOrCreate(
                    [
                        'network' => $network,
                        'contract_address' => $pool['decoded']['params'][2]['value'],
                    ]
                );
                $pool_contract->latest_block = $pool['block_height'];
                $pool_contract->save();
            }
        }
        dd("finish test");
        /*$poolList = collect();
        $test=PoolContract::all();
        $test->each(function ($pool){
            $pool_data = collect(Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/1/address/'.$pool->address.'/balances_v2/')['data']['items']);
            echo($pool_data);
        });
        dd($test->count());
        PoolContract::get(1)->first(function ($pool) use ($poolList) {
            $pool_data = collect(Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/1/address/'.$pool->address.'/balances_v2/')['data']['items']);
            if($pool_data->count() >= 3){
                $sumBalance = 0;
                foreach ($pool_data as $pdata){
                    if($pdata['contract_name'] == $pool->token_0 || $pdata['contract_name'] == $pool->token_1){
                        $sumBalance += $pdata['quote'];
                    }
                }
                if($sumBalance > 0){
                    $pool['pool_data'] = $pool_data;
                    $poolList->add($pool);
                }
            }else{
                echo("fff");
            }
        });

        dd($poolList);*/

        //https://governance.1inch.exchange/v1.1/protocol/pairs
        //$pools = collect(Http::withOptions(['verify' => false])->get('https://governance.1inch.exchange/v1.2/'.$network.'/protocol/pairs')->json());
        $pools = Pool::all();
dd($pools);
        foreach ($pools as &$pdata){
            $pool_data = Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/'.$network.'/address/'.$pdata['pair'].'/balances_v2/')['data']['items'];
            foreach($pool_data as $covalent_info) {
                if($covalent_info['contract_ticker_symbol'] == $pdata['token0']['symbol']){
                    $pdata['token_0']['logo_url'] =$covalent_info['logo_url'];
                    $pdata['token_0']['contract_ticker_symbol'] =$covalent_info['contract_ticker_symbol'];
                    $pdata['token_0']['contract_name'] =$covalent_info['contract_name'];
                } else if($covalent_info['contract_ticker_symbol'] == $pdata['token1']['symbol']){
                    $pdata['token_1']['logo_url'] =$covalent_info['logo_url'];
                    $pdata['token_1']['contract_ticker_symbol'] =$covalent_info['contract_ticker_symbol'];
                    $pdata['token_1']['contract_name'] =$covalent_info['contract_name'];
                }
                $pdata['total_liquidity_quote'] = $pdata['reserveUSD'];
                $pdata['volume_24h_quote'] = $pdata['volumeUSD24h'];
                if(array_key_exists('swapEarningsUSD24h',$pdata))
                $pdata['fee_24h_quote'] = $pdata['swapEarningsUSD24h'];
                $pdata['swap_count_24h'] = 0;
                $pdata['exchange'] = $pdata['pair'];
            }
        }
        $total_liquidity_quote = $volume_24h_quote = $fee_24h_quote = $swap_count_24h = 0;
        $sizePair = count($pools);
        $topPools = collect($pools);
        foreach ($pools as $item){
            if($item['reserveUSD'] >= 1000){
                $total_liquidity_quote += $item['reserveUSD'];
                $volume_24h_quote += $item['volumeUSD24h'];
                if(array_key_exists('swapEarningsUSD24h',$pdata))
                $fee_24h_quote += $item['swapEarningsUSD24h'];
                $swap_count_24h += 0;
            }
        }
        return [
            'total_pair' => $sizePair,
            'total_liquidity_quote' => $total_liquidity_quote,
            'volume_24h_quote' => $volume_24h_quote,
            'fee_24h_quote' => $fee_24h_quote,
            'swap_count_24h' => $swap_count_24h,
            'tokens' => [],
            'totalActivePool' => $topPools->filter(function ($pool, $key) {
                return $pool['reserveUSD'] > 0;
            })->count(),
            'totalEmptyPool' => $topPools->filter(function ($pool, $key) {
                return $pool['reserveUSD'] == 0;
            })->count(),
            'topPools' => $topPools->take(50)->values(),
            'pools' => $pools
        ];


    }

    private function get_1inch_stats($network){
        /*$result = collect(Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/1/events/topics/0xc95935a66d15e0da5e412aca0ad27ae891d20b2fb91cf3994b6a3bf2b8178082/?starting-block=11607431&ending-block=latest&page-size=9999999')['data']['items']);
        $result->each(function ($contract){
            PoolContract::updateOrCreate(
                [
                    'address' => $contract['decoded']['params'][0]['value'],
                    'network' => 1,
                    'dex' => '1inch',
                    'token_0' => $contract['decoded']['params'][1]['value'],
                    'token_1' => $contract['decoded']['params'][2]['value'],
                    'block_height' => $contract['block_height'],
                ]
            );
        });*/
        /*$poolList = collect();
        $test=PoolContract::all();
        $test->each(function ($pool){
            $pool_data = collect(Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/1/address/'.$pool->address.'/balances_v2/')['data']['items']);
            echo($pool_data);
        });
        dd($test->count());
        PoolContract::get(1)->first(function ($pool) use ($poolList) {
            $pool_data = collect(Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/1/address/'.$pool->address.'/balances_v2/')['data']['items']);
            if($pool_data->count() >= 3){
                $sumBalance = 0;
                foreach ($pool_data as $pdata){
                    if($pdata['contract_name'] == $pool->token_0 || $pdata['contract_name'] == $pool->token_1){
                        $sumBalance += $pdata['quote'];
                    }
                }
                if($sumBalance > 0){
                    $pool['pool_data'] = $pool_data;
                    $poolList->add($pool);
                }
            }else{
                echo("fff");
            }
        });

        dd($poolList);*/

        //https://governance.1inch.exchange/v1.1/protocol/pairs
        $pools = collect(Http::withOptions(['verify' => false])->get('https://governance.1inch.exchange/v1.2/'.$network.'/protocol/pairs')->json());
        $pools = collect($pools->splice(0,10))->toArray();

        foreach ($pools as &$pdata){
            $pool_data = Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/'.$network.'/address/'.$pdata['pair'].'/balances_v2/')['data']['items'];
            foreach($pool_data as $covalent_info) {
                if($covalent_info['contract_ticker_symbol'] == $pdata['token0']['symbol']){
                    $pdata['token_0']['logo_url'] =$covalent_info['logo_url'];
                    $pdata['token_0']['contract_ticker_symbol'] =$covalent_info['contract_ticker_symbol'];
                    $pdata['token_0']['contract_name'] =$covalent_info['contract_name'];
                } else if($covalent_info['contract_ticker_symbol'] == $pdata['token1']['symbol']){
                    $pdata['token_1']['logo_url'] =$covalent_info['logo_url'];
                    $pdata['token_1']['contract_ticker_symbol'] =$covalent_info['contract_ticker_symbol'];
                    $pdata['token_1']['contract_name'] =$covalent_info['contract_name'];
                }
                $pdata['total_liquidity_quote'] = $pdata['reserveUSD'];
                $pdata['volume_24h_quote'] = $pdata['volumeUSD24h'];
                if(array_key_exists('swapEarningsUSD24h',$pdata))
                    $pdata['fee_24h_quote'] = $pdata['swapEarningsUSD24h'];
                $pdata['swap_count_24h'] = 0;
                $pdata['exchange'] = $pdata['pair'];
            }
        }
        $total_liquidity_quote = $volume_24h_quote = $fee_24h_quote = $swap_count_24h = 0;
        $sizePair = count($pools);
        $topPools = collect($pools);
        foreach ($pools as $item){
            if($item['reserveUSD'] >= 1000){
                $total_liquidity_quote += $item['reserveUSD'];
                $volume_24h_quote += $item['volumeUSD24h'];
                if(array_key_exists('swapEarningsUSD24h',$pdata))
                    $fee_24h_quote += $item['swapEarningsUSD24h'];
                $swap_count_24h += 0;
            }
        }
        return [
            'total_pair' => $sizePair,
            'total_liquidity_quote' => $total_liquidity_quote,
            'volume_24h_quote' => $volume_24h_quote,
            'fee_24h_quote' => $fee_24h_quote,
            'swap_count_24h' => $swap_count_24h,
            'tokens' => [],
            'totalActivePool' => $topPools->filter(function ($pool, $key) {
                return $pool['reserveUSD'] > 0;
            })->count(),
            'totalEmptyPool' => $topPools->filter(function ($pool, $key) {
                return $pool['reserveUSD'] == 0;
            })->count(),
            'topPools' => $topPools->take(50)->values(),
            'pools' => $pools
        ];


    }

    public function hackathon(Request $request, $network, $dex){
        $general_data = ["all_network" => [1 => ["network" => 1, "name" => "Ethereum", "logo_url" => "https://etherscan.io/images/ethereum-icon.png"],56 => ["network" => 56, "name" => "Binance Smart Chain", "logo_url" => "https://etherscan.io/images/brands/bscscan-logo.png"]]];
        $general_data = array_merge($general_data, ["dex" => $dex, "name" => "1Inch", "description" => "DeFi / DEX aggregator on Ethereum & Binance Smart Chain","icon" => "https://www.crypto-nation.io/cn-files/uploads/2021/01/1inch-Logo.png", "network" => $network]);
        $general_data = array_merge($general_data, ["warning" => [56 => "The 5 pool addresses analyzed are taken from https://governance.1inch.exchange/v1.2/56/protocol/pairs.On the BSC the data returned by the endpoint seems not to be up to date"]]);
        $hackthon_data = Hackhaton::whereDate('created_at', '=', Carbon::today()->toDateTimeString())->get()->where('network', '==', $network)->where('challenge', '==', 2)->last()->toArray();
        return view('hackathon/general', ['general_data' => $general_data, 'hackthon_data' => json_decode($hackthon_data['data'])]);
    }

    public function hackathon_profile(Request $request, $network, $address){
        $balance = collect(Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/'.$network.'/address/'.$address.'/balances_v2/?no-nft-fetch=true')['data']['items']);

        $general_data = ["all_network" => [1 => ["network" => 1, "name" => "Ethereum", "logo_url" => "https://etherscan.io/images/ethereum-icon.png"],56 => ["network" => 56, "name" => "Binance Smart Chain", "logo_url" => "https://etherscan.io/images/brands/bscscan-logo.png"]]];
        //$general_data = array_merge($general_data, ["name" => "1Inch", "description" => "DeFi / DEX aggregator on Ethereum & Binance Smart Chain","icon" => "https://www.crypto-nation.io/cn-files/uploads/2021/01/1inch-Logo.png", "network" => $network]);
        $value_balance=0;
        foreach ($balance->toArray() as $asset){
            $value_balance += $asset['quote'];
        }
        //dd($balance->map(function($asset) use ($value_balance) {return ($asset['quote']/$value_balance)*100;}));
        //dd($balance->map(function($asset){return sprintf('#%06X', mt_rand(0, 0xFFFFFF));})->slice(0,5));
        $general_data = array_merge($general_data, ["address" => $address, "network" => $network]);
        return view('hackathon/profile', ['general_data' => $general_data, 'balance_data' => $balance, 'value_balance' => $value_balance, 'top_5_balance' => $balance->map(function($asset){return $asset['contract_name'];})->slice(0,5),'top_5_balance_value' => $balance->map(function($asset) use ($value_balance) {return (($asset['quote']/$value_balance)*100 > 1 )? ($asset['quote']/$value_balance)*100 : 1;})->slice(0,5),'top_5_color' => $balance->map(function($asset){return sprintf('#%06X', mt_rand(0, 0xFFFFFF));})->slice(0,5)]);
    }

    public function hackathon_stats(Request $request, $network, $dex){
        $general_data = ["all_network" => [1 => ["network" => 1, "name" => "Ethereum", "logo_url" => "https://etherscan.io/images/ethereum-icon.png"],56 => ["network" => 56, "name" => "Binance Smart Chain", "logo_url" => "https://etherscan.io/images/brands/bscscan-logo.png"]]];
        $general_data = array_merge($general_data, ["name" => "1Inch", "description" => "DeFi / DEX aggregator on Ethereum & Binance Smart Chain","icon" => "https://www.crypto-nation.io/cn-files/uploads/2021/01/1inch-Logo.png", "network" => $network]);
        $hackthon_data = Hackhaton::whereDate('created_at', '=', Carbon::today()->toDateTimeString())->get()->where('network', '==', $network)->where('challenge', '==', 1)->last()->toArray();
        $hackhaton_data_yesterday = Hackhaton::whereDate('created_at', '=', Carbon::yesterday()->toDateTimeString())->get()->where('network', '==', $network)->last()->toArray();
        //dd($hackthon_data,$hackhaton_data_yesterday);
        //dd($hackhaton_data_yesterday);
        return view('hackathon/stats', ['general_data' => $general_data, 'hackthon_data' => json_decode($hackthon_data['data']), 'hackthon_data_yesterday' => json_decode($hackhaton_data_yesterday['data'])]);
    }
    // CREE UNE METHODE QUI EN PASSANT LES BOOLEAN PERMET DE CREE UN TABLEAU DE RETOUR DE DONNE SPECIFIC
}

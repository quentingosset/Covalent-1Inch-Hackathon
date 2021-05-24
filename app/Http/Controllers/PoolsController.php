<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class PoolsController extends Controller
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
    public function uniswap_general()
    {
        $response_uniswap = Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/1/networks/uniswap_v2/assets/?page-size=9999');
        $general_data = $this->totalPoolInfo($response_uniswap['data']['items']);
        dd($general_data);
        $general_data = array_merge($general_data, ["name" => "Uniswap", "description" => "A fully decentralized protocol for automated liquidity provision on Ethereum.","icon" => "https://assets.bit2me.com/assets/images/crypto-icons/v5/uni-circle-solid-default.svg"]);
        return view('uniswap', ['general_data' => $general_data]);
    }

    private function totalPoolInfo($items){
            $total_liquidity_quote = 0;
            $volume_24h_quote = 0;
            $fee_24h_quote = 0;
            $sizePair = count($items);
            foreach ($items as $item){
                $total_liquidity_quote += $item['total_liquidity_quote'];
                $volume_24h_quote += $item['volume_24h_quote'];
                $fee_24h_quote += $item['fee_24h_quote'];
            }
            return [
                'total_pair' => $sizePair,
                'total_liquidity_quote' => $total_liquidity_quote,
                'volume_24h_quote' => $volume_24h_quote,
                'fee_24h_quote' => $fee_24h_quote
            ];
    }
}

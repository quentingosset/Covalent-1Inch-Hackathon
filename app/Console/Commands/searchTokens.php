<?php

namespace App\Console\Commands;

use App\Models\Pool;
use App\Models\PoolContract;
use App\Models\Token;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class searchTokens extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'search:tokens';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tokens = Token::all()->where('status','==',-1);
        $this->info('[START] tokens search');
        do{
            $this->searchTokens($tokens);
        }while(Token::all()->where('status','==',-1)->count());

        $this->info('[END] tokens search');
        return 1;
    }

    private function searchTokens($tokens){
        foreach ($tokens as $token){
            $start = now();
            $this->info('[START] address '.$token->contract_address.' search informations');
            //dd('https://api.covalenthq.com/v1/'.$token->network.'/address/'.$token->contract_address.'/balances_v2/');
            $tokens_data = Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/'.$token->network.'/address/'.$token->contract_address.'/balances_v2/');
            if($tokens_data->successful()){
                $tokens_data = collect($tokens_data['data']['items']);
                $time = $start->diffInSeconds(now());
                $this->comment("[PROCESS TIME - CURL FIND TOKENS] Processed in $time seconds");
                $progressTokenFind = $this->output->createProgressBar($tokens_data->count());
                $progressTokenFind->start();
                foreach ($tokens_data as $token_data){
                    if($token_data['contract_address'] == $token->contract_address){
                        Token::updateOrCreate(
                            [
                                'network' => $token->network,
                                'contract_address' => $token_data['contract_address'],
                            ],
                            [
                                'logo_url' => $token_data['logo_url'],
                                'contract_name' => $token_data['contract_name'],
                                'contract_ticker_symbol' => $token_data['contract_ticker_symbol'],
                                'contract_decimals' => $token_data['contract_decimals'],
                                'status' => 0
                            ]
                        );
                    }
                    $progressTokenFind->advance();
                }
                $progressTokenFind->finish();
                $this->info('');
                $time = $start->diffInSeconds(now());
                $this->comment("[PROCESS TIME - INSERT DATA] Processed in $time seconds");
            }else{
                Token::updateOrCreate(
                    [
                        'network' => $token->network,
                        'contract_address' => $token->contract_address,
                    ],
                    [
                        'status' => -2
                    ]
                );
            }
            $this->info('[END] address '.$token->contract_address.' search informations');
        }
    }
}

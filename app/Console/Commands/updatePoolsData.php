<?php

namespace App\Console\Commands;

use App\Models\Pool;
use App\Models\PoolContract;
use App\Models\Token;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class updatePoolsData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pools:updateData';

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
        $pools = Pool::all();
        $this->info('[START] pools update data');
        $this->updatePoolsData($pools);
        $this->info('[END] pools update data');
        return 1;
    }

    private function updatePoolsData($pools){
        foreach ($pools as $pool){
            $start = now();
            $this->info('[START] address '.$pool->address.' search informations');
            $tokens_data = Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/'.$pool->network.'/address/'.$pool->address.'/balances_v2/');
            if($tokens_data->successful()){
                $tokens_data = collect($tokens_data['data']['items']);
                $time = $start->diffInSeconds(now());
                $this->comment("[PROCESS TIME - CURL FIND TOKENS] Processed in $time seconds");
                $progressTokenFind = $this->output->createProgressBar($tokens_data->count());
                $progressTokenFind->start();
                foreach ($tokens_data as $token_data){
                    if($token_data['contract_address'] == $pool->token_0 || $token_data['contract_address'] == $pool->token_1){
                        Token::updateOrCreate(
                            [
                                'network' => $pool->network,
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
            }
            $this->info('[END] address '.$pool->address.' search informations');
        }
    }
}

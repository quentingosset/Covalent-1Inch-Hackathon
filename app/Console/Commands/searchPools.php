<?php

namespace App\Console\Commands;

use App\Models\Pool;
use App\Models\PoolContract;
use App\Models\Token;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class searchPools extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'search:pools';

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
        $dex = $this->choice(
            'Witch dex do you want search pools ?',
            ['1inch'],
            0,
            $maxAttempts = null,
            $allowMultipleSelections = false
        );
        $pool_contracts = PoolContract::all()->where('dex','==',$dex);
        $this->info('[START] '.$dex.' pools search');
        foreach ($pool_contracts as $pool_contract){
            $start = now();
            $this->info('[START] find pools');
            dd('https://api.covalenthq.com/v1/'.$pool_contract->network.'/events/topics/'.$pool_contract->topic.'/?starting-block='.$pool_contract->latest_block.'&ending-block=latest&page-size=9999999');
            $pools = collect(Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/'.$pool_contract->network.'/events/topics/'.$pool_contract->topic.'/?starting-block='.$pool_contract->latest_block.'&ending-block=latest&page-size=9999999')['data']['items']);
            $time = $start->diffInSeconds(now());
            $this->comment("[PROCESS TIME - CURL FIND POOL] Processed in $time seconds");
            $progressPoolFind = $this->output->createProgressBar($pools->count());
            $progressPoolFind->start();
                foreach ($pools as $pool){
                    Pool::updateOrCreate(
                        [
                            'address' => $pool['decoded']['params'][0]['value'],
                            'network' => $pool_contract->network,
                            'dex' => '1inch',
                            'token_0' => $pool['decoded']['params'][1]['value'],
                            'token_1' => $pool['decoded']['params'][2]['value'],
                        ]
                    );
                    $pool_contract->latest_block = $pool['block_height'];
                    $pool_contract->save();
                    $progressPoolFind->advance();
                }
            $progressPoolFind->finish();
            $this->info('');
            $time = $start->diffInSeconds(now());
            $this->comment("[PROCESS TIME - INSERT DATA] Processed in $time seconds");
            $this->info('[END] find pools');
        }
        $this->info('[END] '.$dex.' pools search');
        $this->call('pools:updateData');
        return 1;
    }
}

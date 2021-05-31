<?php

namespace App\Console\Commands;

use App\Models\Hackhaton;
use App\Models\Pool;
use App\Models\PoolContract;
use App\Models\Token;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class hackathon extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hackathon:start';

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
        $contents = Storage::get('public/DnD1INCHAPI/challenge1_eth_data.json');
        Hackhaton::create([
            'challenge' => 1,
            'data' => $contents,
            'network' => 1
        ]);
        $contents = Storage::get('public/DnD1INCHAPI/challenge1_bsc_data.json');
        Hackhaton::create([
            'challenge' => 1,
            'data' => $contents,
            'network' => 56
        ]);
        $contents = Storage::get('public/DnD1INCHAPI/challenge2_eth_data.json');
        Hackhaton::create([
            'challenge' => 2,
            'data' => $contents,
            'network' => 1
        ]);
        $contents = Storage::get('public/DnD1INCHAPI/challenge2_eth_data.json');
        Hackhaton::create([
            'challenge' => 2,
            'data' => $contents,
            'network' => 56
        ]);
        return 1;
    }
}

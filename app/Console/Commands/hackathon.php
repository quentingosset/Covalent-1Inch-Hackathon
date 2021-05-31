<?php

namespace App\Console\Commands;

use App\Models\Pool;
use App\Models\PoolContract;
use App\Models\Token;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

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

    }
}

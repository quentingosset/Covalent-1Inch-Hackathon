<?php

namespace Database\Seeders;

use App\Models\PoolContract;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoolContractSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pool_contracts')->delete();

        PoolContract::insert(['network' => 1, 'dex' => '1inch', 'address' => '0xCB06dF7F0Be5B8Bb261d294Cf87C794EB9Da85b1', 'topic' => '0xc95935a66d15e0da5e412aca0ad27ae891d20b2fb91cf3994b6a3bf2b8178082', 'latest_block' => '11607431']);
    }
}

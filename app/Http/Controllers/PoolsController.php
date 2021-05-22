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
        $response = Http::withOptions(['verify' => false])->get('https://api.covalenthq.com/v1/56/networks/pancakeswap_v2/assets/');
        return view('pools', ['pools_assets' => $response]);
    }
}

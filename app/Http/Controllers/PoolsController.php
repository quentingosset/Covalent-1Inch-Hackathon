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
}

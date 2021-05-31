<?php

use App\Http\Controllers\PoolingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});

//Route::get('/', [PoolingController::class, 'assetsAllPools']);
//Route::get('/{network}/{dex}', [PoolingController::class, 'dex'])->name('dex');
//Route::get('/{network}/{dex}/stats', [PoolingController::class, 'dex'])->name('dex_stats');
//Route::get('{dex}/pool/{pool_contract}', [PoolingController::class, 'poolDetails'])->name('pool_detail');
//Route::get('{dex}/pools', [PoolingController::class, 'dex_pools'])->name('dex_pools');



Route::get('/{network}/{dex}', [PoolingController::class, 'hackathon'])->name('dex');
Route::get('/{network}/profile/{address}', [PoolingController::class, 'hackathon_profile'])->name('profile');
Route::get('/{network}/{dex}/stats', [PoolingController::class, 'hackathon_stats'])->name('dex_stats');

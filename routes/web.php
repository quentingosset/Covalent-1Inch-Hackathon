<?php

use App\Http\Controllers\PoolsController;
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

//Route::get('/', [PoolsController::class, 'assetsAllPools']);
Route::get('/uniswap', [PoolsController::class, 'uniswap_general']);

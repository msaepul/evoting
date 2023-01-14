<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasterDataController;

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

Route::get('/', function () {
    return view('survei');
});

Route::get('Dashboard', [AdminController::class, 'Dashboard']);
Route::get('Voting', [AdminController::class, 'Voting']);

Route::get('Indikator', [MasterDataController::class, 'Indikator']);

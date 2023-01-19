<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\PublicController;

use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('survei');
// });

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('index');
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating'])->name('authenticating');
    Route::get('Voteform', [PublicController::class, 'voteform'])->name('voteform');
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('Dashboard', [AdminController::class, 'Dashboard']);

    Route::get('Indikator', [MasterDataController::class, 'Indikator'])->name('Indikator');
    Route::post('Indikator', [MasterDataController::class, 'IndikatorProses'])->name('indikator_proses');
    Route::patch('/Indikator/{id}', ['as' => 'Indikator.update', 'uses' => 'App\Http\Controllers\MasterDataController@updateIndikator']);
    Route::delete('/delete/{id}', ['as' => 'aspek.delete', 'uses' => 'App\Http\Controllers\MasterDataController@deleteIndikator']);


    Route::get('Voting', [AdminController::class, 'Voting']);
    Route::get('DataVoting', [AdminController::class, 'DataVoting']);

    Route::resource('posts', AdminController::class);
});

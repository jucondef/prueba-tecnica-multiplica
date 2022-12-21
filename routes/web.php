<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'getInformationUser'])->name('getInformationUser');
Route::get('/getData', [UserController::class, 'getData'])->name('getData');
Route::get('transactionsByClient/{id_client}', [UserController::class, 'getTransactionsUser'])->name('getTransactionsUser');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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
    return view('welcome');
});

Route::get('/showcontacts' , [ContactsController::class , 'index'])->name('showcontacts');
Route::get('/create' , [ContactsController::class , 'create'])->name('addcontact');
Route::post('/store' , [ContactsController::class , 'store'])->name('storedetails');
Route::get('/csvfile' , [ContactsController::class , 'exportIntoCSV'])->name('getcsv');


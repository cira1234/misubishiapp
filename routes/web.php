<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;


Route::resource('companies',CompanyCRUDController::class);
// Route::get('/companies/stock', [CompanyController::class, 'stock'])->name('companies.stock');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('companies.index');
});





// Route::get('/', function () {
//     return view('companies.stock');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/manageuser', function () {
        return view('crud.manageuser');
    })->name('manageuser');


    Route::get('/re-login', function () {
        return view('crud.loginban');
    })->name('re-login');
    
});

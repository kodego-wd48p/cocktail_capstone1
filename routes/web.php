<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RandomDrinkController;
use App\Http\Controllers\CategoryController;
use App\MOdels\Customer;





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
//     // return view('welcome');

//     // return DB::table('customers')->get();

//     return Customer::all();
// });


// Default routes
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/', function() {
    return view('auth.login');
});

// routes for the RandomDrinkController
Route::get('/random-drinks', [RandomDrinkController::class, 'index']);
Route::get('/random-drink/{id}',[RandomDrinkController::class, 'show']);
Route::get('/random-drink',[RandomDrinkController::class, 'create']);
Route::get('/random-drink/{id}/edit', [RandomDrinkController::class, 'edit']);
Route::get('/random-drinks/search/{search?}', [RandomDrinkController::class, 'search']);


Route::post('/random_drink', [RandomDrinkController::class, 'store']);
Route::put('/random_drink/{id}/edit', [RandomDrinkController::class, 'update']);
Route::delete('/random-drink/{id}', [RandomDrinkController::class, 'destroy']);

// routes fo category
// Route::get('/categories', [CategoryController::class, 'classic_index'])->name('classic_index');
// // Route::get('/categories', [CategoryController::class, 'ordinary_index'])->name('ordinary_index');
// Route::get('/category/{id}', [CategoryController::class, 'show'])->name('show');









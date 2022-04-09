<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
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



// Route::get('/addproduct', function () {
//     return view('addProduct');
// });
// Route::get('/master', 'PageController@master')->name('master');
Route::get('/master', [ProductController::class, 'master'])->name('master');


// Route::get('/addproduct', 'ProductController@addProduct')->name('addProduct');
// Route::post('/addproduct', 'ProductController@saveProduct')->name('saveProduct');

Route::get('/addproduct', [ProductController::class, 'addProduct']);
Route::post('/addproduct', [ProductController::class, 'saveProduct']);
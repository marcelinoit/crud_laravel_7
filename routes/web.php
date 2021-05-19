<?php

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

// routa para pagina inicial que se chama main 
Route::get('/', function () {
    return view('main');
});


//routa para mostrar todos produtos
Route::get('products', 'ProductController@index')->name('product.index');

//routa para criar de produtos
Route::get('create', 'ProductController@create')->name('create.product');

//inserir
Route::post('store', 'ProductController@store')->name('product.store');


// para pagina update
Route::get('edit/product/{id}', 'ProductController@Edit');

// apagar
Route::get('delete/product/{id}', 'ProductController@delete');

//mostrar
// apagar
Route::get('show/product/{id}', 'ProductController@show');

//update
Route::post('update/product/{id}', 'ProductController@Update');


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

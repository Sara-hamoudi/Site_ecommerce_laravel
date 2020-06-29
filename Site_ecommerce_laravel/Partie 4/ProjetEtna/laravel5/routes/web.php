<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', 'adminController@Admin')->name('admin');
Route::get('/catalogue', 'catalogueController@Catalogue')->name('catalogue');
Route::get('/panier', 'PanierController@Panier')->name('panier');
Route::get('/produit', 'ProduitsController@Produit')->name('produit');
Route::get('/produit2', 'ProduitsController@Produit2')->name('produit2');
Route::get('/produit3', 'ProduitsController@Produit3')->name('produit3');
Route::get('/produit4', 'ProduitsController@Produit4')->name('produit4');
Route::get('/produit5', 'ProduitsController@Produit5')->name('produit5');
Route::get('/produit6', 'ProduitsController@Produit6')->name('produit6');
//Route::get('/produit/{id}', 'ProduitsController@show')->name('produit6');

Route::post('/Addproduct', 'ProduitsController@Ajoutproduit')->name('Addproduct');
Route::Post('/Achat', 'PanierController@Panier')->name('Achat');


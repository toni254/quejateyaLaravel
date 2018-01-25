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

Route::get('/', function () {
    return view('welcome');
});

Route::group(["namespace"=>'Admin'],function() { //para no tener q poner Admin\CategoryController
  Route::group(['prefix'=>'admin'], function(){ //para no tener q poner /admin/categorias
    //Categorias
    Route::get('/categorias', 'CategoryController@index')->name('admin.categories.index');
    Route::get('/categorias/crear','CategoryController@create')->name('admin.categories.create');
    Route::post('/categorias','CategoryController@store')->name('admin.categories.store');
    //Route::put('/categorias/editar','CategoryController@edit')->name('admin.categories.edit');

    //Countries
    Route::get('/paises', 'CountryController@index')->name('admin.countries.index');
    Route::get('/paises/crear','CountryController@create')->name('admin.countries.create');
    Route::post('/paises','CountryController@store')->name('admin.countries.store');
    //Cities
    Route::get('/ciudades', 'CityController@index')->name('admin.cities.index');
    Route::get('/ciudades/crear','CityController@create')->name('admin.cities.create');
    Route::post('/ciudades','CityController@store')->name('admin.cities.store');
    //Comments
    Route::get('/comentarios', 'CommentController@index')->name('admin.comments.index');
    Route::get('/comentarios/crear','CommentController@create')->name('admin.comments.create');
    Route::post('/comentarios','CommentController@store')->name('admin.comments.store');
    //Valuations
    Route::get('/valoraciones', 'ValuationController@index')->name('admin.valuations.index');
    Route::get('/valoraciones/crear','ValuationController@create')->name('admin.valuations.create');
    Route::post('/valoraciones','ValuationController@store')->name('admin.valuations.store');
    //Priorities
    Route::get('/prioridades', 'PriorityController@index')->name('admin.priorities.index');
    Route::get('/prioridades/crear','PriorityController@create')->name('admin.priorities.create');
    Route::post('/prioridades','PriorityController@store')->name('admin.priorities.store');
    //Posts
    Route::get('/posts', 'PostController@index')->name('admin.posts.index');
    Route::get('/posts/crear','PostController@create')->name('admin.posts.create');
    Route::post('/posts','PostController@store')->name('admin.posts.store');
    //Tags
    Route::get('/etiquetas', 'TagController@index')->name('admin.tags.index');
    Route::get('/etiquetas/crear','TagController@create')->name('admin.tags.create');
    Route::post('/etiquetas','TagController@store')->name('admin.tags.store');
  });
});

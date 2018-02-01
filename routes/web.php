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
    return view('/web/home/welcome');
});

Route::group(["namespace"=>'Admin'],function() { //para no tener q poner Admin\CategoryController
  Route::group(['prefix'=>'admin'], function(){ //para no tener q poner /admin/categorias
    //Categorias
    Route::get('/categorias', 'CategoryController@index')->name('admin.categories.index');
    Route::get('/categorias/crear','CategoryController@create')->name('admin.categories.create');
    Route::post('/categorias','CategoryController@store')->name('admin.categories.store');
    Route::get('/categorias/{id}/editar','CategoryController@edit')->name('admin.categories.edit');
    Route::put('/categorias/{id}/actualizar','CategoryController@update')->name('admin.categories.update');
    Route::get('/categorias/{id}/detalle','CategoryController@show')->name('admin.categories.show');
    Route::get('/categorias/{id}/eliminar','CategoryController@delete')->name('admin.categories.delete');


    //Countries
    Route::get('/paises', 'CountryController@index')->name('admin.countries.index');
    Route::get('/paises/crear','CountryController@create')->name('admin.countries.create');
    Route::post('/paises','CountryController@store')->name('admin.countries.store');
    Route::get('/paises/{id}/editar','CountryController@edit')->name('admin.countries.edit');
    Route::put('/paises/{id}/actualizar','CountryController@update')->name('admin.countries.update');
    Route::get('/paises/{id}/detalle','CountryController@show')->name('admin.countries.show');
    Route::get('/paises/{id}/eliminar','CountryController@delete')->name('admin.countries.delete');
    //Cities
    Route::get('/ciudades', 'CityController@index')->name('admin.cities.index');
    Route::get('/ciudades/crear','CityController@create')->name('admin.cities.create');
    Route::post('/ciudades','CityController@store')->name('admin.cities.store');
    //Comments
    Route::get('/comentarios', 'CommentController@index')->name('admin.comments.index');
    Route::get('/comentarios/crear','CommentController@create')->name('admin.comments.create');
    Route::post('/comentarios','CommentController@store')->name('admin.comments.store');
    Route::get('/comentarios/{id}/editar','CommentController@edit')->name('admin.comments.edit');
    Route::put('/comentarios/{id}/actualizar','CommentController@update')->name('admin.comments.update');
    Route::get('/comentarios/{id}/detalle','CommentController@show')->name('admin.comments.show');
    Route::get('/comentarios/{id}/eliminar','CommentController@delete')->name('admin.comments.delete');
    //Valuations
    Route::get('/valoraciones', 'ValuationController@index')->name('admin.valuations.index');
    Route::get('/valoraciones/crear','ValuationController@create')->name('admin.valuations.create');
    Route::post('/valoraciones','ValuationController@store')->name('admin.valuations.store');
    Route::get('/valoraciones/{id}/editar','ValuationController@edit')->name('admin.valuations.edit');
    Route::put('/valoraciones/{id}/actualizar','ValuationController@update')->name('admin.valuations.update');
    Route::get('/valoraciones/{id}/detalle','ValuationController@show')->name('admin.valuations.show');
    Route::get('/valoraciones/{id}/eliminar','ValuationController@delete')->name('admin.valuations.delete');
    //Priorities
    Route::get('/prioridades', 'PriorityController@index')->name('admin.priorities.index');
    Route::get('/prioridades/crear','PriorityController@create')->name('admin.priorities.create');
    Route::post('/prioridades','PriorityController@store')->name('admin.priorities.store');
    Route::get('/prioridades/{id}/editar','PriorityController@edit')->name('admin.priorities.edit');
    Route::put('/prioridades/{id}/actualizar','PriorityController@update')->name('admin.priorities.update');
    Route::get('/prioridades/{id}/detalle','PriorityController@show')->name('admin.priorities.show');
    Route::get('/prioridades/{id}/eliminar','PriorityController@delete')->name('admin.priorities.delete');
    //Posts
    Route::get('/posts', 'PostController@index')->name('admin.posts.index');
    Route::get('/posts/crear','PostController@create')->name('admin.posts.create');
    Route::post('/posts','PostController@store')->name('admin.posts.store');
    //Tags
    Route::get('/etiquetas', 'TagController@index')->name('admin.tags.index');
    Route::get('/etiquetas/crear','TagController@create')->name('admin.tags.create');
    Route::post('/etiquetas','TagController@store')->name('admin.tags.store');
    Route::get('/etiquetas/{id}/editar','TagController@edit')->name('admin.tags.edit');
    Route::put('/etiquetas/{id}/actualizar','TagController@update')->name('admin.tags.update');
    Route::get('/etiquetas/{id}/detalle','TagController@show')->name('admin.tags.show');
    Route::get('/etiquetas/{id}/eliminar','TagController@delete')->name('admin.tags.delete');
  });
});

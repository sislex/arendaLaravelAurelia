<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Category;
use App\Good;
Route::get('/getCategories', function(){
    return response()
        ->json(Category::getCategory(),200)
        ->header('Access-Control-Allow-Origin', '*')
        ;

});

Route::get('/getGoodsByCategoryPseudo/{pseudo}', function($pseudo){
    return response()
        ->json(Good::getGoodsByCategoryPseudo($pseudo),200)
        ->header('Access-Control-Allow-Origin', '*')
        ;

});

Route::get('/{url?}', 'Catalog\CatalogController@index');

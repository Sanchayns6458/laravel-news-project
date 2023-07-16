<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Menu;
use App\Http\Controllers\News;

/* Create route for get homepage url */
Route::get( '/', [Menu::class, 'homePage'])->name( 'homepage' ) ;

/** Create route for create news*/
Route::get( '/news-form', [News::class, 'newsForm'] )->name( 'newsCreateForm' );
/** when user submit form for create news this url is activate */
Route::post( '/news-create', [News::class, 'newsCreate'] )->name( 'newsCreate' );
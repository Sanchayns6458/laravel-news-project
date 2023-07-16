<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Menu;
use App\Http\Controllers\News;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [Menu::class, 'homePage'] );
Route::get('/news_create', [News::class, 'newsForm'] );
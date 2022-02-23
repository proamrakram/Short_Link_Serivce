<?php

use App\Http\Controllers\ShortLinkController;
use App\Models\ShortLink;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[ShortLinkController::class,'short_link'])->name('short_link');

Route::post('/add_url',[ShortLinkController::class,'add_url'])->name('add_url');

Route::get('/short{id}',[ShortLinkController::class,'open'])->name('open');

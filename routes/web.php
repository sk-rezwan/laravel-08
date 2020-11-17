<?php

use App\Http\Controllers\TweetController;
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
// Route::get('/pi', function () {
//     return pi();
// });
//Route::get('/', [TweetController::class, 'index']);

Route::get('/tweets',[TweetController::class, 'tweet']);
Route::get('/tweets/create',[TweetController::class, 'showForm'])->name('create');
Route::post('/tweets/create',[TweetController::class, 'processForm']);


Route::redirect('/{any?}', '/');

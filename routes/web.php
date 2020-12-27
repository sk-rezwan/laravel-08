<?php

use App\Http\Controllers\TweetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');


Route::get('/',[HomeController::class, 'showHome'])->name('home');
Route::post('/twitter',[HomeController::class, 'storeTweet'])->name('tweet');




// Tweet controller
Route::get('/tweets',[TweetController::class, 'tweet'])->name('index.tweet');
Route::get('/tweets/create',[TweetController::class, 'showForm'])->name('create');
Route::post('/tweets/create',[TweetController::class, 'processForm']);
Route::get('/tweets/{id}',[TweetController::class, 'showProfile'])->name('profile.id');
Route::post('/tweets/{id}',[TweetController::class, 'updateTweet'])->name('update');
Route::get('/tweets/{id}/delete',[TweetController::class, 'deleteTweet'])->name('profile.delete');


Route::get('/login',[AuthController::class, 'showLogin'])->name('login');
Route::get('/register',[AuthController::class, 'showRegister'])->name('register');


// default error page
Route::get('/{any?}', function () {
    return view('error');
});
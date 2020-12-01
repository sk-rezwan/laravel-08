<?php

use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});
// Route::get('/pi', function () {
//     return pi();
// });
//Route::get('/', [TweetController::class, 'index']);

Route::get('/tweets',[TweetController::class, 'tweet'])->name('index.tweet');
Route::get('/tweets/create',[TweetController::class, 'showForm'])->name('create');
Route::post('/tweets/create',[TweetController::class, 'processForm']);

Route::get('/tweet/{id}',[TweetController::class, 'showProfile'])->name('profile.id');


Route::post('/tweets/{id}',[TweetController::class, 'editTweet'])->name('profile.update');

Route::get('/tweets/{id}/delete',[TweetController::class, 'deleteTweet'])->name('profile.delete');


//Route::redirect('/{any?}', [TweetController::class, 'errorPage']);
//Route::redirect('/{any?}', '/);

Route::get('/{any?}', function () {
    return view('error');
});
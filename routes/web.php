<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/hello', function () { return 'Hello World';
});

 Route::get('/about', function(){
    return 'NIM : 2241720011 <br>
            Nama: Masyithah Sophia Damayanti ';
 });

 Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name;
 });
 
 Route::get('/posts/{post}/comments/{comment}', 
    function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
 });

 Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});
    
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
});

// use App\Http\Controllers\PageController;
// Route::get('/', [PageController::class,'index']);

// use App\Http\Controllers\PageController;
// Route::get('/about', [PageController::class,'about']);

Route::get('/articles/{id}', [PageController::class,'articles']);

use App\Http\Controllers\HomeController;
Route::get('/', HomeController::class);

use App\Http\Controllers\AboutController;
Route::get('/about', AboutController::class);

use App\Http\Controllers\ArticleController;
Route::get('/article/{id}', ArticleController::class);

use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([ 'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy'
]);

<?php

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


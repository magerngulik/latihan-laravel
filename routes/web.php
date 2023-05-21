<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home',
    ["title"=> "home"
]);
});

Route::get('/product',[ProductController::class, 'index']);



Route::get('/about', function () {
    return view('about',
    [
        "title"=> "about",   
        "name" => "M.Zulkarnaen",
        "email"=>"Zulkarnaim70@gmail.com",
        "img"=>"zul.png"
    ]);
});
Route::get('/blog', [PostController::class ,'index']);


Route::get('post/{post:slug}',[PostController::class,'show']);

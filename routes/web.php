<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Models\Category;

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
Route::get('/post/{post:slug}',[PostController::class,'show']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
        "title" => $category->name,
        "posts" => $category->posts,
        "category" => $category->name
    ]);
});

Route::get('/categories',function (){
    return view('categories',[
        "title" => "Post Categories",
        "categories" => Category::all(),
    ]);
});
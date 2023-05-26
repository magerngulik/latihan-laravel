<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    return view('home',
    [
        "title"=> "home",
        "active"=> "Home"

    ]);
});

Route::get('/product',[ProductController::class, 'index']);



Route::get('/about', function () {
    return view('about',
    [
        "title"=> "about",   
        "active"=> "About",
        "name" => "M.Zulkarnaen",
        "email"=>"Zulkarnaim70@gmail.com",
        "img"=>"zul.png"
    ]);
});
Route::get('/posts', [PostController::class ,'index']);
Route::get('/post/{post:slug}',[PostController::class,'show']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        "title" => "Post By Category: $category->name",
        "active"=> "Categories",
        "posts" => $category->posts->load('author','category'),
        
    ]);
});

Route::get('/categories',function (){
    return view('categories',[
        "title" => "Post Categories",
        "active"=> "Categories",
        "categories" => Category::all(),
    ]);
});

Route::get('/authors/{author:username}',function (User $author){
    return view('posts',
        [
            "title" => "Post By Author: $author->name",
            "active"=> "Posts",
            "posts" => $author->post->load('author','category'),
        ]
    );
});
<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Annas Ismail",
        "email" => "annas@annas.com",
        "image" => "annas.png"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Categories Post',
        'categories' => Category::all()
    ]);
});

Route::get('/category/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->post->load('user'),
        'category' => $category->name,
    ]);
});

Route::get('/authors', function(){
    return view('authors', [
        'title' => 'Authors',
        'authors' => User::all()
    ]);
});

Route::get('/author/{user:username}', function(User $user){
    return view('author', [
        'title' => 'Author',
        'name' => $user->name,
        'posts' => $user->post->load('category')
    ]);
});
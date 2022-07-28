<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\DashboardController;

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

    $user = User::latest();
    $search = request('search');
    if(request('search')){
        $user->where('name', 'like', '%' . $search . '%')->orWhere('username', 'like', '%' . $search . '%')->orWhere('email', 'like', '%' . $search . '%');
    }

    return view('authors', [
        'title' => 'Authors',
        'authors' => $user->paginate(9)->withQueryString()
    ]);
});

Route::get('/author/{user:username}', function(User $user){
    return view('author', [
        'title' => 'Author',
        'name' => $user->name,
        'posts' => $user->post->load('category')
    ]);
});

Route::get('/sign-in', [SignInController::class, 'index'])->middleware('guest');
Route::post('/sign-in', [SignInController::class, 'authenticate']);
Route::post('/log-out', [SignInController::class, 'logout']);

Route::get('/sign-up', [SignUpController::class, 'index']);
Route::post('/sign-up', [SignUpController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);

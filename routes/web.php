<?php

use App\Models\Post;
use Illuminate\Http\Request;
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

Route::get('/posts/create', function () {
    return view('create');
})->name('posts.create');

Route::post('/posts', function (Request $request) {
    dd($request->all());
})->name('posts.create');

Route::get('/posts/{post}', function (Post $post) {
    return view('post', compact('post'));
})->name('posts.show');

Route::get('/', function () {
    $posts = Post::latest()->get();
    return view('welcome', compact('posts'));
});

<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded within the "web" middleware group which includes
| sessions, cookie encryption, and more. Go build something great!
|
*/

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all(),
    ]);
});

Route::get('posts/{post}', function ($id) {
    //$post = Post::find($slug);
    return view('post', [
        'post' => Post::findOrFail($id),
    ]);
});

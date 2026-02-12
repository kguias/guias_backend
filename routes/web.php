<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return redirect('/posts');
});

Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts', ['posts' => $posts]);
});

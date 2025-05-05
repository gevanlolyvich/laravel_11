<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'gevan', 'title' => 'About Page']);
});

Route::get('/posts', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get(); //eager loading
    // return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]); // menggunakan all()

    return view('posts', ['title' => 'Blog Page', 'posts' => Post::filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function (Post $post) { //wild card => {slug}

    // $data = Post::find($id);

    return view('/post', ['title' => 'Single Post', 'post' => $post]);

});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load(['category', 'author']); //lazy eager loading
    return view('/posts', ['title' => count($user->posts) . ' Article by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load(['category', 'author']);
    return view('/posts', ['title' => 'Article in: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});





// Buat 2 rute baru
// 1. /blog
// 2 artikel, judul dan isi
// 2. /contact
// email / social media

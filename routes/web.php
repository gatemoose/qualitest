<?php

use App\Models\Post;
use App\Models\HomePage;
use App\Models\AboutPage;
use App\Models\ContactPage;
use App\Models\ServicesList;
use App\Models\ServicesPage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $home = HomePage::latest()->get()[0];
    $posts = Post::all();
    // dd($home);
    return view('Home', compact('home', 'posts'));
});

Route::get('/sobre', function () {
    $about = AboutPage::latest()->get()->toArray()[0];
    // dd($about);
    return view('Sobre', compact('about'));
});

Route::get('/contato', function () {
    $contact = ContactPage::latest()->get()[0];
    return view('Contato', compact('contact'));
});

Route::get('/servicos', function () {
    $services = ServicesPage::latest()->get()[0];
    $services_list = ServicesList::all();
    $services_list = $services_list->split(2);
    $services_list_left = $services_list->get(0);
    $services_list_right = $services_list->get(1);
    // dd($services_list);
    return view('Servicos', compact('services', 'services_list_right', 'services_list_left'));
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/posts', function () {
    $posts = Post::all();
    return view('Posts', compact('posts'));
});

Route::get('/posts/{id}', function (string $id) {
    $post = Post::find($id);
    // dd($post);
    return view('Post', compact('post'));
})->name('post');
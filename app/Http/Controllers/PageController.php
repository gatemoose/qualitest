<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Client;
use App\Models\Document;
use App\Models\HomePage;
use App\Models\AboutPage;
use App\Models\ContactPage;
use App\Models\ServicesList;
use App\Models\ServicesPage;

class PageController extends Controller
{
    public function home()
    {
        $home = HomePage::latest()->first() ?? '';
        $posts = Post::latest()->take(3)->get();

        return view('Home', compact('home', 'posts'));
    }

    public function about()
    {
        $about = AboutPage::latest()->first() ?? [];

        return view('Sobre', compact('about'));
    }

    public function contact()
    {
        $contact = ContactPage::latest()->first() ?? [];

        return view('Contato', compact('contact'));
    }

    public function services()
    {
        $services = ServicesPage::latest()->first() ?? [];
        $services_list = ServicesList::all();
        $services_list = $services_list->split(2);
        $services_list_left = $services_list->get(0) ?? [];
        $services_list_right = $services_list->get(1) ?? [];

        return view('Servicos', compact('services', 'services_list_right', 'services_list_left'));
    }

    public function posts()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('Posts', compact('posts'));
    }

    public function showPost(string $id)
    {
        $post = Post::find($id);

        return view('Post', compact('post'));
    }
}

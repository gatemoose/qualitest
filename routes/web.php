<?php

use Carbon\Carbon;

use App\Models\Post;
use App\Models\Client;
use App\Models\Document;
use App\Models\HomePage;
use App\Models\AboutPage;
use App\Models\ContactPage;
use App\Models\ServicesList;
use App\Models\ServicesPage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientAuthController;

Route::get('/', function () {
    $home = isset(HomePage::latest()->get()[0]) ? HomePage::latest()->get()[0] : [];
    $posts = Post::latest()->take(3)->get();

    return view('Home', compact('home', 'posts'));
});

Route::get('/sobre', function () {
    $about = AboutPage::latest()->get()->toArray()[0];

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

    return view('Servicos', compact('services', 'services_list_right', 'services_list_left'));
});

Route::get('/login', function () {
    return view('Login');
})->name('login');

Route::get('/posts', function () {
    $posts = Post::all();

    return view('Posts', compact('posts'));
});

Route::get('/posts/{id}', function (string $id) {
    $post = Post::find($id);

    return view('Post', compact('post'));
})->name('post');

Route::prefix('cliente')->group(function () {
    Route::get('/login', [ClientAuthController::class, 'showLoginForm'])->name('loginform');
    Route::post('/login', [ClientAuthController::class, 'login'])->name('logincliente');
    Route::post('/logout', [ClientAuthController::class, 'logout'])->name('logoutcliente');
});
    
Route::prefix('cliente')->middleware('auth:clients')->group(function () {
    Route::get('/documentos', function () {
        $clients = Client::where('email', auth()->user()->email)->with(['documents' => function ($query) {
            $query->orderBy('expiration_date', 'desc');
        }])->first();
        
        $docs = $clients->documents;

        $docs_links = $docs->map(function ($item) {
            $item->link = URL::temporarySignedRoute(
                'docread',
                Carbon::parse($item['expiration_date']),
                ['id' => $item->id]
            );

            return $item;
        });

        return view('Docs', compact('clients', 'docs'));
    })->name('docscliente');

    Route::get('/documentos/{id}', function (string $id, Request $request) {

        if (!$request->hasValidSignature()) {
            return view('Expirado');
        }

        $doc = Document::with('clients')->whereRelation('clients', 'email', auth()->user()->email)->where('id', $id)->first();

        if (Storage::disk('local')->exists($doc->url)) {
            return Storage::disk('local')->download($doc->url);
        } else {
            return view('Expirado');
        }
    })->name('docread');
});
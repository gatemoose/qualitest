<?php

use Carbon\Carbon;

use App\Models\Client;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ClientAuthController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/sobre', [PageController::class, 'about'])->name('about');

Route::get('/contato', [PageController::class, 'contact'])->name('contact');

Route::get('/servicos', [PageController::class, 'services'])->name('services');

Route::get('/posts', [PageController::class, 'posts'])->name('posts');

Route::get('/posts/{id}', [PageController::class, 'showPost'])->name('post');

Route::get('/msg', [PageController::class, 'sendMessage'])->name('sendMessage');

Route::prefix('cliente')->group(function () {
    Route::get('/login', [ClientAuthController::class, 'showLoginForm'])->name('showLoginForm');
    Route::post('/login', [ClientAuthController::class, 'login'])->name('login');
    Route::post('/logout', [ClientAuthController::class, 'logout'])->name('clientLogout');
});
    
Route::prefix('cliente')->middleware('auth:clients')->group(function () {
    Route::get('/documentos', function () {
        $clients = Client::where('email', auth()->user()->email)->with(['documents' => function ($query) {
            $query->orderBy('expiration_date', 'desc');
        }])->first();
        
        $docs = $clients->documents;

        $docs_links = $docs->map(function ($item) {
            $item->link = URL::temporarySignedRoute(
                'doc',
                Carbon::parse($item['expiration_date']),
                ['id' => $item->id]
            );

            return $item;
        });

        return view('Docs', compact('clients', 'docs_links')); // docs
    })->name('docs');

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
    })->name('doc');
});
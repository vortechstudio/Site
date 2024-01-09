<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Livewire\Acceuil::class)->name('home');
Route::get('/news', \App\Livewire\News\NewsList::class)->name('news');
Route::get('/blog/{year}/{month}/{slug}', \App\Livewire\News\NewsShow::class)->name('news.show');
Route::get('/products', \App\Livewire\Acceuil::class)->name('products');
Route::get('/about', \App\Livewire\Acceuil::class)->name('about');

Route::get('/account', function () {
    return redirect('https://auth.'.config('app.domain').'/login');
})->name('account');

Route::get('/vortechlab', function () {
    return redirect('https://lab.'.config('app.domain'));
})->name('vortechlab');

Route::get('/wikistore', function () {
    return redirect('https://wiki.'.config('app.domain'));
})->name('wikistore');

Route::get('/test', function () {
    $blog = new \App\Services\VortechAPI\Social\BlogService();
    dd($blog->search([
        "promote" => true
    ]));
});

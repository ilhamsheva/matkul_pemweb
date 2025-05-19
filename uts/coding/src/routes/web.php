<?php

use App\Livewire\CaraMendaftar;
use App\Livewire\DaftarBeasiswa;
use App\Livewire\Login;
use App\Livewire\ShowHomePage;
use App\Livewire\Signup;
use App\Livewire\TentangBeasiswa;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/*
|--------------------------------------------------------------------------
| Livewire Asset Routing (Required for Subfolder Deployments)
|--------------------------------------------------------------------------
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix', '') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix', '') . '/livewire/livewire.js', $handle);
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', ShowHomePage::class)->name('home');
Route::get('/daftar', DaftarBeasiswa::class)->name('daftar_beasiswa');
Route::get('/tentang', TentangBeasiswa::class)->name('tentang_beasiswa');
Route::get('/cara', CaraMendaftar::class)->name('cara_mendaftar');
Route::get('/login', Login::class)->name('login');
Route::get('/signup', Signup::class)->name('signup');

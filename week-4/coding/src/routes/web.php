<?php

use App\Livewire\ShowHomePage;
use App\Livewire\ShowAbout;
use App\Livewire\ShowPortofolio;
use App\Livewire\ShowResume;
use App\Livewire\ShowSkill;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHomePage::class)->name('home');
Route::get('/about', ShowAbout::class)->name('about');
Route::get('/skills', ShowSkill::class)->name('skills');
Route::get('/resume', ShowResume::class)->name('resume');
Route::get('/portofolio', ShowPortofolio::class)->name('portofolio');
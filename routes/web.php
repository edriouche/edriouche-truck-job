<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/companies', function () {

    return view('companies');
});

Route::get('/cmr', function () { return view('cmr'); });
Route::get('/training', [\App\Http\Controllers\TrainingController::class, 'index']);

Route::get('/spain', function () {
    return view('spain');
});

Route::get('/cap', function () {
    return view('cap');
});

Route::get('/spain-companies', function () {
    return view('spain-companies');
});

Route::get('/cv-builder', function () {
    return view('cv-builder');
});

Route::get('/truck-checklist', function () {
    return view('truck-checklist');
});

Route::get('/driver-documents', function () {
    return view('driver-documents');
});

Route::get('/europe-documents', function () {
    return view('europe-documents');
});

Route::get('/europe-rules', function () {
    return view('europe-rules');
});

Route::view('/europe-rules-es', 'europe-rules-es');
Route::view('/europe-rules-fr', 'europe-rules-fr');

Route::get('/tachograph-guide', function () {
    return view('tachograph-guide');
});

Route::get('/spain-law', function () {
    return match (app()->getLocale()) {
        'es' => view('spain-law-es'),
        'fr' => view('spain-law-fr'),
        default => view('spain-law'),
    };
});

Route::get('/spain-jobs', function () {
    return view('spain-jobs');
});

Route::get('/training-centers', function () {
    return view('training-centers');
});

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'es', 'fr'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
        cookie()->queue('locale', $locale, 60 * 24 * 365);
    }

    return redirect(request()->query('redirect', '/'));
});
Route::view('/cmr-es', 'cmr-es');
Route::view('/cmr-fr', 'cmr-fr');

Route::view('/spain-law-es', 'spain-law-es');
Route::view('/spain-law-fr', 'spain-law-fr');

Route::get('/morocco-transport-training', function () {
    return match (app()->getLocale()) {
        'es' => view('morocco-transport-training-es'),
        'fr' => view('morocco-transport-training-fr'),
        default => view('morocco-transport-training'),
    };
});


Route::view('/spanish-companies', 'spanish-companies')->name('spanish-companies');

Route::get('/gallery', [\App\Http\Controllers\GalleryController::class, 'index'])->name('gallery');

Route::post('/gallery', [\App\Http\Controllers\GalleryController::class, 'store'])->middleware('auth')->name('gallery.store');
Route::delete('/gallery/{galleryItem}', [\App\Http\Controllers\GalleryController::class, 'destroy'])->middleware('auth')->name('gallery.destroy');
Route::post('/gallery/{galleryItem}/caption', [\App\Http\Controllers\GalleryController::class, 'updateCaption'])->middleware('auth')->name('gallery.caption');

Route::get('/gallery/login', [\App\Http\Controllers\GalleryAuthController::class, 'login'])->name('login');
Route::post('/gallery/login', [\App\Http\Controllers\GalleryAuthController::class, 'authenticate'])->name('gallery.authenticate');
Route::post('/gallery/logout', [\App\Http\Controllers\GalleryAuthController::class, 'logout'])->name('gallery.logout');

Route::view('/constat-amiable', 'constat-amiable');

<?php

use App\Http\Controllers\Front\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home.home');
})->name('home');

Route::get('/habitaciones', function () {
    return view('front.rooms.rooms');
})->name('rooms');

Route::get('/instalaciones', function () {
    return view('front.installations.installations');
})->name('installations');

Route::get('/servicios', function () {
    return view('front.services.services');
})->name('services');

Route::get('/visita-guadalajara', function () {
    return view('front.visit.visit');
})->name('visit');

Route::get('/contacto', function () {
    return view('front.contact.contact');
})->name('contact');

Route::get('/menus', function () {
    return view('front.menus.menus');
})->name('menus');
Route::get('/menus/habitaciones', function () {
    $path = public_path('\assets\menu-habitaciones.pdf');
    if (file_exists($path)) {
        return response()->file($path);
    } else {
        abort(404);
    }
})->name('menus.habitaciones.file');

Route::get('/menus/canales', function () {
    $path = public_path('\assets\menu-canales.pdf');
    if (file_exists($path)) {
        return response()->file($path);
    } else {
        abort(404);
    }
})->name('menus.canales.file');

Route::get('/menus/reglamento-interno', function () {
    $path = public_path('\assets\reglamento-interno.pdf');
    if (file_exists($path)) {
        return response()->file($path);
    } else {
        abort(404);
    }
})->name('menus.reglamento.interno.file');
Route::get('/menus/reglamento-mascotas', function () {
    $path = public_path('\assets\reglamento-mascotas.pdf');
    if (file_exists($path)) {
        return response()->file($path);
    } else {
        abort(404);
    }
})->name('menus.reglamento.mascotas.file');
Route::post('/contacto', [ContactController::class, 'sendContactEmail'])->name('contact.send');
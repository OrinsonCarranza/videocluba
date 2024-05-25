<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('inicio');  // Asignar nombre 'inicio' a la ruta principal

Route::get('/login', function () {
    return view('auth.login');
})->name('login');  // Asignar nombre 'login' a la ruta de login

Route::post('/logout', function () {
    return redirect()->route('inicio');
})->name('logout');  // Asignar nombre 'logout' a la ruta de logout

Route::get('/catalog', function () {
    return view('catalog.index');
})->name('catalog');  // Asignar nombre 'catalog' a la ruta del catálogo

Route::get('/catalog/show/{id}', function ($id) {
    return view('catalog.show', ['id' => $id]);
})->name('catalog.show');  // Asignar nombre 'catalog.show' a la ruta de mostrar detalle

Route::get('/catalog/create', function () {
    return view('catalog.create');
})->name('catalog.create');  // Asignar nombre 'catalog.create' a la ruta de crear

Route::get('/catalog/edit/{id}', function ($id) {
    return view('catalog.edit', ['id' => $id]);
})->name('catalog.edit');  // Asignar nombre 'catalog.edit' a la ruta de editar
?>
<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/usuarios', function () {
    return 'Usuarios';
});

Route::get('/', function () {
    return 'Home';
});

Route::get('/usuarios/{id}', function ($id) {
    return "Mostrando los detalles del usuario: {$id}";
})->where('id','[0-9]+');

Route::get('/usuarios/nuevo', function () {
    return "Crear nuevo usuario:";
});


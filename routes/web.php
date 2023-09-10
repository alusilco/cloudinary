<?php

use Illuminate\Http\Request;
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

Route::view('/', 'welcome');

Route::post('/upload', function (Request $request) {
    // Asegúrate de que el campo 'imagen' esté presente en la solicitud
    if ($request->hasFile('imagen')) {
        $image = $request->file('imagen');

        // Sube la imagen a Cloudinary en la carpeta 'laravel'
        $result = $image->storeOnCloudinary('laravel');

        // Devuelve la vista 'result' con la URL pública segura de la imagen
        return view('result', [
            'image_path' => $result->getSecurePath(),
        ]);
    }

    // En caso de que no se haya proporcionado un archivo, puedes manejarlo aquí
    return redirect()->back()->with('error', 'No se proporcionó un archivo de imagen.');
});

Route::get('/test', function () {
    return view('result', [
        'image_path' => 'https://res.cloudinary.com/dcyar/image/upload/v1680147920/laravel/l6gierufjhd6hvietzy7.jpg',
    ]);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

//Route::resource('home', PageController::class);

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('alcalde', [PageController::class, 'show_alcalde'])->name('alcalde.view');
Route::get('organigrama', [PageController::class, 'show_organigrama'])->name('organigrama.view');
Route::get('mision', [PageController::class, 'show_mision'])->name('mision.view');
Route::get('galeria', [PageController::class, 'show_galeria'])->name('galeria.view');
Route::get('contacto', [PageController::class, 'show_contacto'])->name('contacto.view');
Route::get('postulaciones', [PageController::class, 'show_postulaciones'])->name('postulaciones.view');
Route::get('noticia', [PageController::class, 'show_noticia'])->name('noticia.view');
Route::get('/show-noticia/{noticia_id}', [PageController::class, 'show_new'])->name('noticia.show');
Route::get('/show-contratacion/{contratacion_id}', [PageController::class, 'show_contratacion'])->name('contratacion.show');
Route::get('login', [PageController::class, 'show_login'])->name('login.view');

//Tramites
Route::get('Servicio-Desarrollo-Social', function () {
    return view('desarrollo_social');
});

Route::get('Catastro-Municipal', function () {
    return view('catastro');
});

Route::get('Registro-Civil', function () {
    return view('registro_civil');
});

Route::get('Proteccion-Civil', function () {
    return view('proteccion_civil');
});

Route::get('Sistema-Sat', function () {
    return view('sistema_sat');
});

Route::get('Ingenieria-Municipal', function () {
    return view('ingenieria_municipal');
});

Route::post('/login', [AuthController::class, 'login'])->name('login.login');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('login.logout');

//GALERIA
Route::get('admin/galeria', [PageController::class, 'galeria'])->middleware('auth')->name('dashboard.show');
Route::get('active/galeria/{galeria_id}/{opcion}', [PageController::class, 'active_galeria'])->middleware('auth')->name('active.galeria');
Route::get('admin/galeria/toggle/{id}', [PageController::class, 'galeria_toggle'])->middleware('auth')->name('galeria.toggle');
Route::post('/guardar-galeria', [PageController::class, 'store_galeria'])->middleware('auth');

//EVENTOS Y VIDEO
Route::get('admin/eventos', [PageController::class, 'eventos'])->middleware('auth')->name('eventos.view');
Route::post('/guardar-evento', [PageController::class, 'store_evento'])->middleware('auth');
Route::get('active/evento/{evento_id}/{opcion}', [PageController::class, 'active_evento'])->middleware('auth')->name('active.evento');
Route::post('/guardar-video', [PageController::class, 'store_video'])->middleware('auth');

//NOTICIAS
Route::get('admin/noticias', [PageController::class, 'noticias'])->middleware('auth')->name('noticias.show');
Route::post('/guardar-noticia', [PageController::class, 'store_noticia'])->middleware('auth');
Route::get('active/noticia/{noticia_id}/{opcion}', [PageController::class, 'active_noticia'])->middleware('auth')->name('active.noticia');

//CONTRATACIONES
Route::get('admin/contrataciones', [PageController::class, 'contrataciones'])->middleware('auth')->name('contrataciones.view');
Route::get('nueva-contratacion', [PageController::class, 'create_contratacion'])->middleware('auth')->name('contratacion.create');
Route::post('/guardar-contratacion', [PageController::class, 'store_contratacion'])->middleware('auth');
Route::get('active/contratacion/{contratacion_id}/{opcion}', [PageController::class, 'active_contratacion'])->middleware('auth')->name('active.contratacion');
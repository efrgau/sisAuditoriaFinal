<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IsoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

## TO DO
#EDWIN ṔACHECO FIGUEROA 
# Rutas para el manejo de logueo, registro y reseteo de contraseña del sistema
Route::get('/',[LoginController::class,'show']);
Route::post('/login',[LoginController::class,'login']);

#Registro de usuarios en el sistema con espera de aprobación.
Route::get('/registrarUsuario', [RegisterController::class,'registraUsuario'])->name('registraUsuario');

#Registra un nuevo usuario en el sistema para aprobación
Route::post('/register',[RegisterController::class,'register']);


Route::get('/home',[HomeController::class,'index'])->name('inicio');

//Route::post('/logout',[LogoutController::class,'logout'])->name('logout');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');



Route::get('/empresa',[EmpresaController::class,'index']);

Route::get('/identificar',[IsoController::class,'identificar']);


Route::get('/proteger',[IsoController::class,'proteger']);

Route::get('/detectar',[IsoController::class,'detectar']);


Route::get('/responder',[IsoController::class,'responder']);

Route::get('/recuperar',[IsoController::class,'recuperar']);

Route::get('/ayuda',[AyudaController::class,'ayuda']);



Route::get('/inicio', function () {
    return view('index');
});


Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/usuarios', function () {
    return view('usuarios/listausuarios');
});

Route::get('/crearusuario', function () {
    return view('usuarios/registrousuario');
});

Route::get('/menu', function () {
    return view('layoutmenu');
});

Route::get('/ayuda', function () {
    return view('ayuda');
});


Route::get('/graficas', function () {
    return view('/graficasevaluacion');
});

Route::get('/HOMEISO', function () {
    return view('homeiso');
});










Route::get('/informegeneral', function () {
    return view('informegeneral');
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\informe\informeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\UsersController;
use App\Http\Controllers\IsoController;
use App\Http\Controllers\AyudaController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
# 

# Rutas para el manejo de logueo, registro y reseteo de contraseña del sistema
Route::get('/', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

## INICIO DE LA APLICACIÓN AUTENTICADO
Route::get('/home', [HomeController::class, 'index'])->name('inicio');

## ROUTING A MODULO USUARIOS
#Registro de usuarios en el sistema con espera de aprobación.
Route::get('/registrarUsuario', [RegisterController::class, 'registraUsuario'])->name('registraUsuario');

#Registra un nuevo usuario en el sistema para aprobación
Route::post('/register', [RegisterController::class, 'register']);

#Salida del usuario del logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

#Editar Perfil del usuario
Route::resource('profiles', \App\Http\Controllers\ProfileController::class);

#Ver Lista de usuarios del sistema
Route::get('/listaUsuarios', [UsersController::class, 'show'])->name('listaUsuarios');
Route::get('/registrarUsuarioNuevo', [UsersController::class, 'createUserForm'])->name('registrarUsuarioNuevo');
Route::get('/Users/VerUsuario', [UsersController::class, 'showUser'])->name('VerUsuario');

#ver Lista de usuarios del sistema
Route::resource('users', \App\Http\Controllers\user\UsersController::class);

#Ver Lista de roles de usuarios del sistema
Route::resource('roles', \App\Http\Controllers\RoleController::class);

# Resources de evaluaciones Generales
Route::resource('factories', \App\Http\Controllers\FactoryController::class);
Route::resource('categories', \App\Http\Controllers\CategoryController::class);
Route::resource('subcategories', \App\Http\Controllers\SubcategoryController::class);
Route::resource('valevaluations', \App\Http\Controllers\ValevaluationController::class);
Route::resource('evaluations', \App\Http\Controllers\EvaluationController::class);


Route::get('/empresa', [EmpresaController::class, 'index']);

Route::get('/identificar', [IsoController::class, 'identificar']);


Route::get('/proteger', [IsoController::class, 'proteger']);

Route::get('/detectar', [IsoController::class, 'detectar']);


Route::get('/responder', [IsoController::class, 'responder']);

Route::get('/recuperar', [IsoController::class, 'recuperar']);

## INFORMES DE RESULTADOS

Route::get('/informeEvaluacion', [informeController::class, 'informeGeneral']);
Route::get('/informeTabla', [informeController::class, 'informeTabla']);
Route::get('/informeResultadosA', [informeController::class, 'informeResultadosA']);


Route::get('/ayuda', [AyudaController::class, 'Ayuda'])->name('ayuda');
Route::get('/normativaISO', [AyudaController::class, 'descripcion'])->name('normativa');




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




Route::get('/graficas', function () {
    return view('/graficasevaluacion');
});

Route::get('/HOMEISO', function () {
    return view('homeiso');
});










Route::get('/informegeneral', function () {
    return view('informegeneral');
});
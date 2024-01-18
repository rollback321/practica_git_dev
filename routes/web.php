<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuentaController;
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

Route::get('menuView', function () {
    return view('menuAdmin');
});

Route::get('menuPartes', function () {
    return view('menuHeader').view('menuBody').view('menuFoder');
});

//Uso de controladores
Route::get('usersss', [CuentaController::class, 'index']);

Route::post('post', [CuentaController::class, 'obtenerDatos']);


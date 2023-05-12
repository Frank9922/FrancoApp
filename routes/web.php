<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PedidosProducto;
use App\Http\Livewire\Relacioncontroller;
use App\Http\Livewire\Test;
use App\Models\PedidoProducto;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/welcome', [PedidoProducto::class, 'index']);


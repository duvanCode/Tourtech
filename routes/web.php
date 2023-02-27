<?php

use Illuminate\Support\Facades\Route;
use App\Models\Producto;
use App\Models\Compra;
use App\http\Controllers\ClientesController;
use App\Mail\OrdenPedida;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    $productos = Producto::all();
    return view('prueba',compact('productos'));
});

Route::get('/mail',function(){
    Mail::to('duvanyepezfa@gmail.com')->send(new OrdenPedida(Compra::find(34)));
});

Route::resource('/compra',ClientesController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

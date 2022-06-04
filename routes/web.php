<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinosController;

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
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('pinos/valide',[PinosController::class,'valide'])->name('pinos.valide');
    Route::get('pinos/valide/diagram',[PinosController::class,'diagram'])->name('diagram');
    Route::get('pinos/valide/getProduct',[PinosController::class,'GetProduct'])->name('get.product');
    Route::get('pinos/valide/get-product/{id}',[PinosController::class,'GetProductByID'])->name('get.productByID');
    Route::get('pinos/valide/delete/{id}',[PinosController::class,'delete'])->name('delete');
    Route::get('pinos/valide/edit/{id}',[PinosController::class,'modifier'])->name('edit');
    Route::post('pinos/valide/edit',[PinosController::class,'updateData'])->name('update');
    Route::get('pinos/mahdi',[PinosController::class,'ind']);
    Route::get('pinos/mahdi/{id}',[PinosController::class,'sh'])->name('shjdshdhsq');
    Voyager::routes();
});

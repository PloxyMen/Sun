<?php

use App\Http\Controllers\BbsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[BbsController::class,'index'])->name('index');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/add',[HomeController::class,'showAddBbForm'])->name('bb.add');
Route::post('/home',[HomeController::class,'storeBb'])->name('bb.store');
Route::get('/home/{bb}/edit',[HomeController::class,'showEditBbForm'])->name('bb.edit');
Route::patch('/home/{bb}',[HomeController::class,'updateBb'])->name('bb.update');
Route::get('/home/{bb}/delete',[HomeController::class,'showDeleteBbForm'])->name('bb.delete');
Route::delete('/home/{bb}',[HomeController::class,'destroyBb'])->name('bb.destroy');

Route::get('/{bb}','BbsController@detail')->name('detail');

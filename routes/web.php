<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataSiswa;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AddSiswa;
use App\Http\Controllers\EditSiswa;
use App\Http\Controllers\InsertSiswa;
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

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/datasiswa', [DataSiswa::class, 'dataSiswa'])->name('admin.datasiswa');
Route::get('/datasiswa/addsiswa', [DataSiswa::class, 'add'])->name('admin.addsiswa');
Route::get('/datasiswa/editsiswa/{id}', [DataSiswa::class, 'edit'])->name('admin.editsiswa');
Route::post('/insertsiswa', [DataSiswa::class, 'insert'])->name('admin.insertsiswa');
Route::post('/updatesiswa', [DataSiswa::class, 'update'])->name('admin.updatesiswa');

Route::get('/datasiswa/delete/{id}', [DataSiswa::class, 'delete'])->name('admin.deletesiswa');

Route::get('/dashboardbuku', [BookController::class, 'databuku'])->name('admin.dashboardbuku');
Route::get('/databuku/addbuku', [BookController::class, 'add'])->name('admin.addbuku');
Route::get('/databuku/editbuku/{id}', [BookController::class, 'edit'])->name('admin.editbuku');
Route::post('/insertbuku', [BookController::class, 'insert'])->name('admin.insertbuku');
Route::post('/updatebuku', [BookController::class, 'update'])->name('admin.updatebuku');

Route::get('/databuku/delete/{id}', [BookController::class, 'delete'])->name('admin.deletebuku');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\SertifikatController;
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

Route::get('/', [WebController::class, 'index']);
Route::post('/pertanyaan/insert', [WebController::class, 'insert']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [HomeController::class, 'index']);

//About
Route::middleware(['auth:sanctum', 'verified'])->get('/about', [AboutController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/about/add', [AboutController::class, 'add']);
Route::middleware(['auth:sanctum', 'verified'])->post('/about/insert', [AboutController::class, 'insert']);
Route::middleware(['auth:sanctum', 'verified'])->get('/about/edit/{id}', [AboutController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->post('/about/update/{id}', [AboutController::class, 'update']);
Route::middleware(['auth:sanctum', 'verified'])->get('/about/delete/{id}', [AboutController::class, 'delete']);

//Pendidikan
Route::middleware(['auth:sanctum', 'verified'])->get('/pendidikan', [PendidikanController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/pendidikan/add', [PendidikanController::class, 'add']);
Route::middleware(['auth:sanctum', 'verified'])->post('/pendidikan/insert', [PendidikanController::class, 'insert']);
Route::middleware(['auth:sanctum', 'verified'])->get('/pendidikan/edit/{id}', [PendidikanController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->post('/pendidikan/update/{id}', [PendidikanController::class, 'update']);
Route::middleware(['auth:sanctum', 'verified'])->get('/pendidikan/delete/{id}', [PendidikanController::class, 'delete']);

//Pekerjaan
Route::middleware(['auth:sanctum', 'verified'])->get('/pekerjaan', [PekerjaanController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/pekerjaan/add', [PekerjaanController::class, 'add']);
Route::middleware(['auth:sanctum', 'verified'])->post('/pekerjaan/insert', [PekerjaanController::class, 'insert']);
Route::middleware(['auth:sanctum', 'verified'])->get('/pekerjaan/edit/{id}', [PekerjaanController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->post('/pekerjaan/update/{id}', [PekerjaanController::class, 'update']);
Route::middleware(['auth:sanctum', 'verified'])->get('/pekerjaan/delete/{id}', [PekerjaanController::class, 'delete']);

//Organisasi
Route::middleware(['auth:sanctum', 'verified'])->get('/organisasi', [OrganisasiController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/organisasi/add', [OrganisasiController::class, 'add']);
Route::middleware(['auth:sanctum', 'verified'])->post('/organisasi/insert', [OrganisasiController::class, 'insert']);
Route::middleware(['auth:sanctum', 'verified'])->get('/organisasi/edit/{id}', [OrganisasiController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->post('/organisasi/update/{id}', [OrganisasiController::class, 'update']);
Route::middleware(['auth:sanctum', 'verified'])->get('/organisasi/delete/{id}', [OrganisasiController::class, 'delete']);

//Sertifikat
Route::middleware(['auth:sanctum', 'verified'])->get('/sertifikat', [SertifikatController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/sertifikat/add', [SertifikatController::class, 'add']);
Route::middleware(['auth:sanctum', 'verified'])->post('/sertifikat/insert', [SertifikatController::class, 'insert']);
Route::middleware(['auth:sanctum', 'verified'])->get('/sertifikat/edit/{id}', [SertifikatController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->post('/sertifikat/update/{id}', [SertifikatController::class, 'update']);
Route::middleware(['auth:sanctum', 'verified'])->get('/sertifikat/delete/{id}', [SertifikatController::class, 'delete']);

//Pertanyaan
Route::middleware(['auth:sanctum', 'verified'])->get('/pertanyaan', [PertanyaanController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/pertanyaan/edit/{id}', [PertanyaanController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->post('/pertanyaan/update/{id}', [PertanyaanController::class, 'update']);
Route::middleware(['auth:sanctum', 'verified'])->get('/pertanyaan/delete/{id}', [PertanyaanController::class, 'delete']);


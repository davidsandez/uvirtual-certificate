<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;

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

Route::get('/', [CertificateController::class, 'list_students']);
Route::get('/view_certificate/{id}', [CertificateController::class, 'view_certificate'])->name('view_certificate');
Route::get('/download_certificate/{id}', [CertificateController::class, 'download_certificate'])->name('download_certificate');

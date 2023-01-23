<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
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

//test/file_upload二アクセスすると、アップロードフォームのbladeが表示される
Route::get('/test/file_upload',[FileUploadController::class,'index'])->name('file_upload.index');
//アップロードの処理を行う
Route::post(('/test/file_upload/action'),[FileUploadController::class,'action'])->name('file_upload.action');
Route::post(('/test/file_upload/edit'),[FileUploadController::class,'edit'])->name('file_upload.edit');


Route::get('/test/file_upload/output',[FileUploadController::class,'output'])->name('file_upload.output');

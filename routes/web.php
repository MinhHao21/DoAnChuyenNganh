<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DanhmucController;








use App\Http\Controllers\VanhoaController;

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
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});



// file upload


Route::get('/danh-muc-so-tp', [DanhmucController::class, 'danhmuchacon'])->name('posts.danhmuchacon');
Route::get('/lay-ten-danh-muc', [DanhmucController::class, 'laytendanhmuc'])->name('laytendanhmuc');

Route::get('/', [VanhoaController::class,'trangchu'])->name('trangchu');
Route::get('/tim-kiem-post', [VanhoaController::class,'timkiempost'])->name('timkiempost');






Route::get('/ajax-comment', [CommentController::class,'ajaxcomment'])->name('ajaxcomment');
Route::post('/save-comment', [CommentController::class,'savecomment'])->name('savecomment');
Route::post('/update-comment', [CommentController::class,'updatecomment'])->name('updatecomment');
Route::get('/delete-comment', [CommentController::class,'deletecomment'])->name('deletecomment');







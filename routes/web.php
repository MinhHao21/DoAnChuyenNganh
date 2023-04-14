<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KyanhController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\NghesynghenhanController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\DisannghethuatController;
use App\Http\Controllers\CaulacboController;
use App\Http\Controllers\FileuploadController;
use App\Http\Controllers\VanbanController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\VanhoaController;
use App\Models\Fileupload;

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
Route::get('/xoa-file', [FileuploadController::class, 'xoafile'])->name('khieunaitocaos.xoafile');
Route::get('/xoa-uuid', [FileuploadController::class, 'xoauuid'])->name('khieunaitocaos.xoauuid');
Route::get('/load-file', [FileuploadController::class, 'loadfile'])->name('khieunaitocaos.loadfile');
Route::post('/uploads', [FileuploadController::class, 'fileupload'])->name('khieunaitocaos.fileupload');
Route::get('/config', [FileuploadController::class, 'config'])->name('khieunaitocaos.config');


Route::get('/danh-muc-so-tp', [DanhmucController::class, 'danhmuchacon'])->name('posts.danhmuchacon');
Route::get('/lay-ten-danh-muc', [DanhmucController::class, 'laytendanhmuc'])->name('laytendanhmuc');

// VĂN HÓA NGHỆ AN 
Route::get('/', [VanhoaController::class,'trangchu'])->name('trangchu');
Route::get('/tin-tuc/{slug}', [VanhoaController::class,'tintuc'])->name('tintuc');
Route::get('/chi-tiet-tin-tuc/{slug}', [VanhoaController::class,'chitiettintuc'])->name('chitiettintuc');
Route::get('/tim-kiem-post', [VanhoaController::class,'timkiempost'])->name('timkiempost');

// Route::get('/k2-items/{slug}', [VanhoaController::class,'k2items'])->name('k2items');
// Route::get('/k2-categories/goc-nhin-van-hoa/{slug}', [VanhoaController::class,'k2categories'])->name('k2categories');
// Route::get('/goc-nhin-van-hoa/k2-comments/{slug}', [VanhoaController::class,'k2comments'])->name('k2comments');
// // Route::get('/goc-nhin-van-hoa/k2-users/{slug}', [VanhoaController::class,'k2users'])->name('k2users');
// Route::get('/van-hoa-va-doi-song/k2-extra-fields/{slug}', [VanhoaController::class,'k2extrafields'])->name('k2extrafields');
// Route::get('/van-hoa-va-doi-song/k2-extra-field-groups/{slug}', [VanhoaController::class,'k2extrafieldgroups'])->name('k2extrafieldgroups');
// // Route::get('/van-hoa-va-doi-song/k2-media-manager/{slug}', [VanhoaController::class,'k2mediamanager'])->name('k2mediamanager');
// // Route::get('/van-hoa-va-doi-song/k2-information/', [VanhoaController::class,'tintuc'])->name('tintuc');
// Route::get('/du-lich/{slug}', [VanhoaController::class,'dulich'])->name('dulich');
// Route::get('/dat-va-nguoi-xu-nghe/{slug}', [VanhoaController::class,'datvanguoixunghe'])->name('datvanguoixunghe');
// Route::get('/dien-anh', [VanhoaController::class,'dienanh'])->name('dienanh');
// Route::get('/muc-luc', [VanhoaController::class,'mucluc'])->name('mucluc');

// Route::get('/k2-items/tin-tuc/{slug}', [VanhoaController::class,'k2itemss'])->name('k2itemss');
// Route::get('/k2-categories/goc-nhin-van-hoa/nhung-goc-nhin-van-hoa/{slug}', [VanhoaController::class,'k2categoriess'])->name('k2categoriess');
// Route::get('/goc-nhin-van-hoa/k2-comments/nhin-ra-the-gioi/{slug}', [VanhoaController::class,'k2commentss'])->name('k2commentss');
// Route::get('/goc-nhin-van-hoa/k2-users/dien-dan/{slug}', [VanhoaController::class,'k2userss'])->name('k2userss');
// Route::get('/van-hoa-va-doi-song/k2-extra-fields/van-hoa-hoc-duong/{slug}', [VanhoaController::class,'k2extrafieldss'])->name('k2extrafieldss');
// Route::get('/van-hoa-va-doi-song/k2-extra-field-groups/cuoc-song-quanh-ta/{slug}', [VanhoaController::class,'k2extrafieldgroupss'])->name('k2extrafieldgroupss');
// Route::get('/van-hoa-va-doi-song/k2-media-manager/khach-moi-cua-tap-chi/{slug}', [VanhoaController::class,'k2mediamanagers'])->name('k2mediamanagers');
// // Route::get('/van-hoa-va-doi-song/k2-information/ong-kinh-van-hoa/', [VanhoaController::class,'chitiettintuc'])->name('chitiettintuc');
// Route::get('/du-lich/non-nuoc-viet-nam/{slug}', [VanhoaController::class,'nonnuocvietnam'])->name('nonnuocvietnam');
// Route::get('/du-lich/du-lich-xu-nghe/{slug}', [VanhoaController::class,'dulichxunghe'])->name('dulichxunghe');
// Route::get('/du-lich/the-gioi-do-day/{slug}', [VanhoaController::class,'thegioidoday'])->name('thegioidoday');
// Route::get('/dat-va-nguoi-xu-nghe/nguoi-xu-nghe/{slug}', [VanhoaController::class,'nguoixunghe'])->name('nguoixunghe');
// Route::get('/dat-va-nguoi-xu-nghe/xu-nghe-ngay-nay/{slug}', [VanhoaController::class,'xunghengaynay'])->name('xunghengaynay');
// Route::get('/dat-va-nguoi-xu-nghe/dat-nuoc-xu-nghe/{slug}', [VanhoaController::class,'datnuocxunghe'])->name('datnuocxunghe');
// Route::get('/dien-anh/{slug}', [VanhoaController::class,'dienanhs'])->name('dienanhs');
// Route::get('/muc-luc/{slug}', [VanhoaController::class,'muclucs'])->name('muclucs');

Route::get('/test-1', [VanhoaController::class,'test'])->name('test');


Route::get('/doc-bao-in', [VanhoaController::class,'docPdf'])->name('docPdf');


Route::get('/ajax-comment', [CommentController::class,'ajaxcomment'])->name('ajaxcomment');
Route::post('/save-comment', [CommentController::class,'savecomment'])->name('savecomment');
Route::post('/update-comment', [CommentController::class,'updatecomment'])->name('updatecomment');
Route::get('/delete-comment', [CommentController::class,'deletecomment'])->name('deletecomment');







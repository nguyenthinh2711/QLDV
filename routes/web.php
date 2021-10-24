<?php

use App\Http\Controllers\Admin\DichvuController;
use App\Http\Controllers\Admin\MonanController;
use App\Http\Controllers\Admin\NvDVController;
use App\Http\Controllers\Admin\ThucdonController;
use App\Http\Controllers\Client\DVClientController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dichvu', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//mon an
Route::get('/monan/list-monan',[MonanController::class,'index'])->middleware('auth')->name('admin.listmonan');
Route::get('/monan/create-monan',[MonanController::class,'create'])->middleware('auth')->name('admin.createmonan');
Route::post('/monan/add-monan',[MonanController::class,'store'])->middleware('auth')->name('admin.addmonan');
Route::get('/monan/edit-monan/{monan}',[MonanController::class,'edit'])->middleware('auth')->name('admin.editmonan');
Route::post('/monan/update-monan/{monan}',[MonanController::class,'update'])->middleware('auth')->name('admin.updatemonan');
Route::delete('/monan/destroy-monan/{monan}',[MonanController::class,'destroy'])->name('admin.destroymonan');

//Dichvu
Route::get('/dichvu/list-dvphong',[DichvuController::class,'dvphong'])->middleware('auth')->name('admin.listDvPhong');
Route::get('/dichvu/list-dvanuong',[DichvuController::class,'dvanuong'])->middleware('auth')->name('admin.listDvAU');
Route::get('/dichvu/list-dvsk',[DichvuController::class,'dvsk'])->middleware('auth')->name('admin.listDvSK');
Route::get('/dichvu/create-dichvu',[DichvuController::class,'create'])->middleware('auth')->name('admin.createDV');
Route::post('/dichvu/add-dichvu',[DichvuController::class,'store'])->middleware('auth')->name('admin.storeDV');
Route::get('/dichvu/edit-dichvu/{dichvu}',[DichvuController::class,'edit'])->middleware('auth')->name('admin.editdichvu');
Route::post('/dichvu/update-dichvu/{dichvu}',[DichvuController::class,'update'])->middleware('auth')->name('admin.updatedichvu');
Route::delete('/dichvu/destroy-dichvu/{dichvu}',[DichvuController::class,'destroy'])->name('admin.destroydichvu');

Route::get('/client/dichvu',[DVClientController::class,'show'])->name('client.showDv');

//Thucdon
Route::get('/thucdon/list-thucdon',[ThucdonController::class,'index'])->middleware('auth')->name('admin.listThucdon');
Route::get('/thucdon/create-thucdon',[ThucdonController::class,'create'])->middleware('auth')->name('admin.createTD');
Route::post('/thucdon/add-thucdon',[ThucdonController::class,'store'])->middleware('auth')->name('admin.storeTD');
Route::get('/thucdon/edit-thucdon/{thucdon}',[ThucdonController::class,'edit'])->middleware('auth')->name('admin.editTD');
Route::post('/thucdon/update-thucdon/{thucdon}',[ThucdonController::class,'update'])->middleware('auth')->name('admin.updateTD');
Route::get('/thucdon/show-thucdon/{thucdon}',[ThucdonController::class,'show'])->middleware('auth')->name('admin.showTD');

//NhanVien
Route::get('/NVDichvu/list-NVDichvu',[NvDVController::class,'nvdichvu'])->middleware('auth')->name('admin.listNVDichvu');
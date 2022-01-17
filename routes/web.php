<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ManageStockController;
use App\Http\Controllers\ProfitController;
use App\Http\Controllers\AdminManageUserController;
use App\Http\Controllers\AdminManageContactController;
use App\Http\Controllers\JanCodeController;
use App\Http\Controllers\ManageProductController;
use App\Http\Controllers\ImportAsinController;
use App\Http\Controllers\ImportBlackListController;
use App\Http\Controllers\ImportCheckProductController;
use App\Http\Controllers\ManageOrderController;
use App\Http\Controllers\EditShopController;
use App\Http\Controllers\AnalyzeController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/',[HomeController::class,'index']);
Route::middleware(['auth'])->group(function(){
     
    Route::get('/mypage',[MypageController::class,'index'])->name('mypage');
    Route::get('/listing',[ListingController::class,'index']);
    Route::get('/managestock',[ManageStockController::class,'index']);
    Route::get('/profit',[ProfitController::class,'index']);
    Route::get('/manageProduct',[ManageProductController::class,'index']);
    Route::get('/import/importAsin',[ImportAsinController::class,'index']);
    Route::get('/import/blacklist',[ImportBlackListController::class,'index']);
    Route::get('/import/checkProduct',[ImportCheckProductController::class,'index']);
    Route::get('/order/manageOrder',[ManageOrderController::class,'index']);
    Route::get('/manage/editShop',[EditShopController::class,'index']);
    Route::get('/manage/Analyze',[AnalyzeController::class,'index']);


});
   

Route::middleware(['auth','admin'])->group(function(){

    Route::get('admin/manageuser',[AdminManageUserController::class,'index'])->name('manageuser');
    Route::get('admin/managecontact',[AdminManageContactController::class,'index'])->name('managecontact');
    
});


Route::get('file-import-export',[JanCodeController::class,'fileImportExport']);
Route::post('file-import',[JanCodeController::class,'fileImport'])->name('file-import');
Route::get('file-export',[JanCodeController::class,'fileExport'])->name('file-export');

// Route::get('/register',[HomeController::class,'register']);
// Route::get('/login',[HomeController::class,'login']);
require __DIR__.'/auth.php';

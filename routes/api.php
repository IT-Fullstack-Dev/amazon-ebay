<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\ImportBlacklistController;
use App\Http\Controllers\ ImportProductAsinController;
use App\Http\Controllers\CheckProductController;
use App\Http\Controllers\ImportAsinController;
use App\Http\Controllers\ManageOrderController;
use App\Http\Controllers\EditShopController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

// Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
//                 ->middleware('auth')
//                 ->name('logout');

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');

Route::post('/blackasin',[ImportBlacklistController::class,'blackAsinImport']);
Route::post('import/ngword',[ImportBlacklistController::class,'ngwordImport']);
Route::post('import/productasin',[ImportProductAsinController::class,'importasin']);
Route::post('checkproduct',[CheckProductController::class,'checkproduct']);

Route::post('/getAsin',[CheckProductController::class,'getAsin']);
Route::post('/check/product',[CheckProductController::class,'checkProductInformation']);
Route::get('/setItem',[ImportAsinController::class,'setItem']);
Route::post('/getOrderInformation',[ManageOrderController::class,'getOrder']);
Route::get('/displayOrder',[ManageOrderController::class,'displayOrder']);
Route::post('/displaySingleOrder',[ManageOrderController::class,'displaySingleOrder']);
Route::post('/registerStore',[EditShopController::class,'registerStore']);
Route::post('/listProducts',[ListingController::class,'listProducts']);
// Route::post('/getOrderDetail',[ManageOrderController::class,'getOrderDetail']);
Route::post('/getCategory',[ListingController::class,'getCategory']);
Route::post('/registerEabyCategory',[ListingController::class,'registerEabyCategory']);
Route::get('/getStore',[EditShopController::class,'getStore']);
Route::post('/deleteStore',[EditShopController::class,'deleteStore']);
Route::post('/registerBusinessPolicy',[EditShopController::class,'registerBusinessPolicy']);
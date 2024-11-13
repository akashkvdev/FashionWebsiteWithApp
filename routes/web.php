<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebSiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// View WebSite Only Start
    Route::get('home',[WebSiteController::class,'home'])->name('Home');
    Route::get('about',[WebSiteController::class,'about'])->name('About');
    Route::get('contact',[WebSiteController::class,'contact'])->name('Contact');
    Route::get('mens',[WebSiteController::class,'mens'])->name('Mens');
    Route::get('womens',[WebSiteController::class,'womens'])->name('Womens');
    Route::get('kids',[WebSiteController::class,'kids'])->name('Kids');
// View WebSite Only End

// WebApplications
    Route::get('/user-dashboard',[AuthController::class,'loadUserDahsboard']);
    Route::get('/sellers-dashboard',[AuthController::class,'loadSellersDahsboard'])->name('SalesDashboard');
    Route::get('/sellers-dashboard/addProducts',[AuthController::class,'addProductsView'])->name('addProductsBySeeler');
    Route::post('/addProducts',[AuthController::class,'addProducts'])->name('add_Products');




Route::post('/register',[AuthController::class,'userRegister'])->name('userRegister');
Route::get('login',[AuthController::class,'loginload'])->name('loginPage');

Route::post('login',[AuthController::class,'userLogin'])->name('login');



Route::get('/logout',[AuthController::class,'logout'])->name('logout');;

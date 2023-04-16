<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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



Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::get('/index',[HomeController::class,'redirect']);

Route::get('/room',[HomeController::class,'rooms']);

Route::get('/restaurant',[HomeController::class,'restaurant']);

Route::get('/about',[HomeController::class,'about']);

Route::get('/contact',[HomeController::class,'contact']);

Route::get('/reserve',[HomeController::class,'reserve']);

Route::get('/myreservation',[HomeController::class,'myreservation']);

Route::get('/cancel_reser/{id}',[HomeController::class,'cancel_reser']);

Route::get('/payment/{id}',[HomeController::class,'payment']);

Route::post('/reservation',[HomeController::class,'reservation']);

Route::post('/email',[HomeController::class,'mail']);

Route::post('/paid',[HomeController::class,'paid']);

Route::get('/feedback',[HomeController::class,'feedback']);

Route::post('/feed',[HomeController::class,'feed']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/index1',[AdminController::class,'index']);

Route::get('/add_room',[AdminController::class,'addroom']);

Route::get('/add_food',[AdminController::class,'addfood']);

Route::post('/upload_room',[AdminController::class,'uploadroom']);

Route::post('/upload_food',[AdminController::class,'uploadfood']);

Route::get('/room_list',[AdminController::class,'roomlist']);

Route::get('/food_list',[AdminController::class,'foodlist']);

Route::get('/showreservation',[AdminController::class,'showreservation']);

Route::get('/cancel_reserve/{id}',[AdminController::class,'cancel_reserve']);

Route::get('/deleteroom/{id}',[AdminController::class,'delete_room']);

Route::get('/updateroom/{id}',[AdminController::class,'update_room']);

Route::get('/deletefood/{id}',[AdminController::class,'delete_food']);

Route::get('/deleteuser/{id}',[AdminController::class,'delete_user']);

Route::get('/updatefood/{id}',[AdminController::class,'update_food']);

Route::post('/editroom/{id}',[AdminController::class,'edit_room']);

Route::post('/editfood/{id}',[AdminController::class,'edit_food']);

Route::get('/email',[AdminController::class,'email']);

Route::get('/fedback',[AdminController::class,'fedback']);
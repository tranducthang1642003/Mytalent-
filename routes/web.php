<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\cv\list1;
use App\Http\Controllers\cv\addcv;

Route::prefix('login')->group(function(){
Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('/forgetpass',[LoginController::class,'quenpass']);
Route::get('/newforgetpass',[LoginController::class,'uploadpass']);
});

//listing
Route::prefix('cv')->group(function(){
 Route::get('/add',[addcv::class,'showaddcv']);
 Route::get('/login',[list1::class,'dangnhap']);
    
});
    
    


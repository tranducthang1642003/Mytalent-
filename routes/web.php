<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\cv\addcv;
use App\Http\Controllers\job\add_job;

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
    
Route::prefix('js_job')->group(function(){
    Route::get('/job',[ add_job::class,'showadd_job']);
   });
       
    


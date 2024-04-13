<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\cv\addcv;
use App\Http\Controllers\job\add_job;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


Route::prefix('login')->group(function(){
Route::get('/', [RegisterController::class, 'showlogin'])->name('login');
Route::get('/forgetpass',[RegisterController::class,'quenpass']);
Route::get('/newforgetpass',[RegisterController::class,'uploadpass']);
});


Route::prefix('cv')->group(function(){
 Route::get('/add',[addcv::class,'showaddcv'])->name('cv_job');
 Route::post('/add',[addcv::class,'cv_job']);
 Route::get('/test-email',[HomeController::class,'testEmail']);
});




Route::prefix('js_job')->group(function(){
    Route::get('/job',[ add_job::class,'showadd_job'])->name('job');
    Route::post('/job',[add_job::class,'job']);
    Route::get('/list',[add_job::class,'showlist']);
   
   });  
       
    




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

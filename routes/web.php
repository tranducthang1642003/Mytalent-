<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\cv\addcv;
use App\Http\Controllers\job\add_job;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\loginController;
// use Modules\Blog\Http\Controllers\BlogController;



Route::prefix('login')->group(function(){
    Route::post('/login', [LoginController::class, 'login'])->name('login1');
    Route::post('/login1', [RegisterController::class, 'login1']);
Route::get('/register', [RegisterController::class, 'showlogin'])->name('register');
Route::post('/register',[RegisterController::class,'create']);
Route::get('/forgetpass',[RegisterController::class,'quenpass']);
Route::get('/newforgetpass',[RegisterController::class,'uploadpass']);
});
Route::get('/verify-token', [RegisterController::class, 'showVerifyTokenForm'])->name('verify.token');
Route::post('/verify-token', [RegisterController::class,'verifyToken'])->name('verify.token');



Route::prefix('cv')->group(function(){
 Route::get('/add',[addcv::class,'showaddcv'])->name('cv_job');
 Route::post('/add',[addcv::class,'cvJob'])->name('cv_job');
 Route::get('/listcv',[addcv::class,'showcv']);


});


Route::prefix('js_job')->group(function(){
    Route::get('/job',[ add_job::class,'showadd_job'])->name('job');
    Route::post('/job',[add_job::class,'job']);
    Route::get('/list',[add_job::class,'showlist']);
    Route::get('/jobs/search', [add_job::class, 'filter'])->name('jobs.filter');
    Route::post('jobs.filter', [add_job::class, 'filter'])->name('jobs.filter');
    // Trong phương thức filter của controller


   });  
       
    





<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\cv\CvController;
use App\Http\Controllers\Job\JobController;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\filter;



Route::prefix('login')->group(function(){
    Route::post('/login', [LoginController::class, 'login'])->name('login1');
    Route::post('/login1', [RegisterController::class, 'login1']);
    Route::get('/register', [RegisterController::class, 'showlogin'])->name('register');
    Route::post('/register',[RegisterController::class,'create']);
    Route::get('/forgetpass',[RegisterController::class,'quenpass']);
    Route::get('/newforgetpass',[RegisterController::class,'uploadpass']);
});
    Route::get('/verify-token', [RegisterController::class, 'showVerifyTokenForm'])->name('verify.token');
    Route::post('/verify-token', [RegisterController::class, 'verifyToken'])->name('verify.token');

    Route::prefix('cv')->group(function() {
        Route::get('/thongtin', [CvController::class, 'thongtin']);
        Route::get('/chuyentap', [CvController::class, 'chuyentap']);
    
        Route::get('/add', [CvController::class, 'showAddCv'])->name('cv_job.show');
        Route::post('/add', [CvController::class, 'addCv'])->name('cv_job.add');
    
        Route::get('/listcv', [CvController::class, 'showCv'])->name('cv.list');
    
        Route::delete('/cv/{id}', [CvController::class, 'destroyCv'])->name('cv.destroy');
        
        Route::get('/cv/{id}/edit', [CvController::class, 'edit'])->name('cv.edit');
        Route::put('/cv/{id}', [CvController::class, 'update'])->name('cv.update');
    });
    
 
    
    Route::prefix('js_job')->group(function () {
        Route::get('/job', [JobController::class, 'showAddJob'])->name('job.showAdd');
        Route::post('/job', [JobController::class, 'addJob'])->name('job.add');
        Route::get('/list', [JobController::class, 'showList'])->name('job.list');
    
        Route::get('/job/search', [JobController::class, 'filterJobsAndCvs'])->name('job.filter');
        Route::post('/job/search', [JobController::class, 'filterJobsAndCvs'])->name('job.filter');
    
        Route::delete('/job/{id}', [JobController::class, 'destroyJob'])->name('job.destroy');
        
        Route::get('/job/{id}/edit', [JobController::class, 'edit'])->name('job.edit');
        Route::put('js_job/job/{id}', 'JobController@update')->name('job.update');

    });



Route::get('/filter', [filter::class, 'showFilterForm'])->name('showFilterForm');
Route::get('/filter', [filter::class, 'filterCv'])->name('filter');



<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HosptialController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Log\LoginController;
use App\Http\Controllers\Profail\ProfailController;
use App\Http\Controllers\RolePermissionsController;
use App\Models\Auth;
use App\Models\Doctor;
use App\Models\Hosptial;
use App\Models\Major;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('admin.home');
// });



Route::prefix('admin/')->middleware('auth')->group(function(){
     Route::get('home',[AuthController::class,'dashbord'])->name('admin.home');
     Route::resource('hosptials',HosptialController::class);
     Route::resource('majors', MajorController::class);
     Route::resource('doctors',DoctorController::class);
     Route::resource('admins', AdminController::class);
     Route::resource('roles', RoleController::class);
     Route::resource('permissions', PermissionController::class);
     Route::resource('permissions/role',RolePermissionsController::class);   
     Route::get('logout',[AuthController::class, 'logout'])->name('admin.logout');
     Route::get('change-password',[AuthController::class, 'changePassword'])->name('admin.change-password');
     Route::post('change-password',[AuthController::class, 'psotPassword'])->name('admin.post-change');
    });
    ////Admin
    Route::get('login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('login', [AuthController::class,'postLogin'])->name('login.post');
    //////////////////
    ////Uesr
    Route::resource('loginUesr',LoginController::class);
    Route::post('UesrLogin',[LoginController::class,'LoginUesr'])->name('Login.uesr');
    Route::get('logoutUesr',[LoginController::class, 'logoutUesr'])->name('uesr.logout');
    Route::get('change-password',[LoginController::class, 'changePassword'])->name('uesr.change-password');
  //Route::post('change-password',[LoginController::class, 'psotPassword'])->name('uesr.post-change');
    ///////////////
    
    Route::resource('profail',ProfailController::class);
    ////////////////////
    Route:: get('/',[FrontendController::class,'home'])->name('home');
    Route:: get('/hospital/{id}',[FrontendController::class,'indexhospital'])->name('frontend.hospital');
    Route:: get('/hospitals',[FrontendController::class,'hospitals'])->name('all.hospitel');
    ///////////////
    
    Route::fallback(function(){
        return view('error');
    });
// Route::group(['middleware' => ['role:admin']], function () {
    
// });

// Route::group(['middleware' => ['role:user']], function () {
    
// });


/* Route::group(['middleware' => ['permission:publish articles|edit articles']], function () {
    //
}); */

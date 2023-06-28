<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HosptialController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\FrontendController;
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
    
    Route::post('login', [AuthController::class,'postLogin'])->name('login.post');
    Route::get('login', [AuthController::class, 'login'])->name('admin.login');

// Route::prefix('admin/')->middleware('guest')->group(function () {
//    });
 

Route::fallback(function(){
    return view('error');
});

/////////////////////
Route:: get('/',[FrontendController::class,'home'])->name('home');

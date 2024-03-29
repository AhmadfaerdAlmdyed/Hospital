<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HosptialController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\ConsultingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Log\LoginController;
use App\Http\Controllers\Profail\ProfailController;
use App\Http\Controllers\RolePermissionsController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\UesrController;
use App\Models\Auth;
use App\Models\Doctor;
use App\Models\Hosptial;
use App\Models\Major;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('admin.home');
// });

 ////Admin Login
 Route::prefix('admin/')->middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('login', [AuthController::class,'postLogin'])->name('login.post');
     });
////////////////////
     // Admin Dashbord
Route::prefix('admin/')->middleware('auth:admin')->group(function(){
     Route::get('home',[AuthController::class,'dashbord'])->name('admin.home');
     Route::resource('hosptials',HosptialController::class);
     Route::resource('majors', MajorController::class);
     Route::resource('doctors',DoctorController::class);
     Route::resource('blogs',BlogController::class);
     Route::resource('sections',SectionController::class);
     Route::resource('admins', AdminController::class);
     Route::resource('uesrs', UesrController::class);
     Route::resource('conditions', ConditionController::class);
     Route::resource('roles', RoleController::class);
     Route::resource('messages', MessagesController::class);
     Route::resource('permissions', PermissionController::class);
     Route::resource('permissions/role',RolePermissionsController::class);   
     Route::get('logout',[AuthController::class, 'logout'])->name('admin.logout');
     Route::get('change-password',[AuthController::class, 'changePassword'])->name('admin.change-password');
     Route::post('change-password',[AuthController::class, 'psotPassword'])->name('admin.post-change');
    });
   
    //////////////////
     ///Frontend
    Route:: get('/',[FrontendController::class,'home'])->name('home');
    Route:: get('/hospital/{id}',[FrontendController::class,'indexhospital'])->name('frontend.hospital');
    Route:: get('/hospitals',[FrontendController::class,'hospitals'])->name('all.hospitel');
    Route:: get('/majors',[FrontendController::class,'majors'])->name('all.major');
    Route:: get('/doctors',[FrontendController::class,'doctors'])->name('all.doctors');
    Route:: get('/messages',[FrontendController::class,'indexmessages'])->name('frontend.messages');
    Route::post('messages',[MessagesController::class, 'store'])->name('messages.store');
    Route:: get('/blogs/{id}',[FrontendController::class,'indexblogs'])->name('frontend.blogs');
    Route:: get('/blogs',[FrontendController::class,'blogs'])->name('blogs');
    Route:: get('/conditions',[FrontendController::class,'conditions'])->name('index.conditions');
    Route:: post('/consulting/{id}',[FrontendController::class,'consulting'])->name('index.consulting');
       ////Profail
Route::prefix('uesr/')->middleware('auth:user')->group(function(){
    Route::resource('profail',ProfailController::class);
    Route::get('PersonalData',[ProfailController::class, 'PersonalData'])->name('Data.Personal');
    Route::get('logoutUesr',[LoginController::class, 'logoutUesr'])->name('uesr.logout');
    });
/////////////////////
    ////Uesr Login
    Route::resource('loginUesr',LoginController::class);//index,create,store
    Route::post('LoginUesr',[LoginController::class,'LoginUesr'])->name('Login.uesr');
    Route::get('change-password',[LoginController::class, 'changePassword'])->name('uesr.change-password');
    // Route::post('change-password',[LoginController::class, 'psotPassword'])->name('uesr.post-change');
    //////////////




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

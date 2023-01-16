<?php

use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserfrontendController;
use App\Http\Controllers\Header_create_dataController;
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

// Auth::routes();
Route::get('/', function () {
    if(Auth::user()) {     
        return redirect()->route('home');
    }
    return view('dashboard.user.login');
});


// Route::prefix('user')->name('user.')->group(function () {
    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {

        Route::view('/login', 'dashboard.user.login')->name('login');
        // Route::post('/create', [UserController::class, 'create'])->name('create');
        Route::post('/check', [UserController::class, 'check'])->name('check');
      
    });
    Route::middleware(['auth:web', 'PreventBackHistory'])->group(function () {

        Route::view('/home', 'dashboard.user.layout.headers.cards')->name('home');
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
        Route::get('/profile', [UserController::class,'profile'])->name('profile');
        Route::view('/table', 'dashboard.user.table')->name('table');
        Route::post('/profile_edit', [UserController::class, 'profile_edit'])->name('profile_edit');

    });

    Route::get('/optimize', function() {
        $exitCode = Artisan::call('view:cache');
        return '<h1>Reoptimized class loader</h1>';
    });
    Route::get('/updateapp', function()
    {
        \Artisan::call('dump-autoload');
        echo 'dump-autoload complete';
    });
// });
// ===============================================================================================
//================ admin route ///================================================================
// ===============================================================================================
Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.admin.login')->name('login');
        Route::post('/check', [AdminController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/home', 'dashboard.admin.home')->name('home');
        Route::post('/logut', [AdminController::class, 'logout'])->name('logout');
        Route::view('/profile', 'dashboard.admin.profile')->name('profile');
        Route::get('/userlist', [AdminController::class, 'show'])->name('userlist');

    });
});
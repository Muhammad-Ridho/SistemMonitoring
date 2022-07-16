<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    // Route::get('/dashboard', [
    //     'uses' => 'UserController@getDashboard',
    //     'as' => 'dashboard'
    // ]);
    
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/viewList', [App\Http\Controllers\ViewListController::class, 'index'])->name('viewList');

    Route::get('/viewMaps', [App\Http\Controllers\ViewMapController::class, 'index'])->name('viewMaps');

    Route::get('/userManagement', [App\Http\Controllers\UserManagementController::class, 'index'])->name('userManagement');

    Route::get('/absensiEmployee', [App\Http\Controllers\AbsensiEmployeeController::class, 'index'])->name('absensiEmployee');

    Route::get('post', [PostController::class, 'index'])->name('post');
});



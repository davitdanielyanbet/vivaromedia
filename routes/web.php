<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::any('/', [MainController::class,'index'] );


Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('profile','profile')->name('profile');

    Route::put('profile',[App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');

    Route::get('edit/{id}',[App\Http\Controllers\ProfileController::class, 'edit'])->name('edit');

    Route::put('edit/{id}',[App\Http\Controllers\ProfileController::class, 'edit'])
        ->name('edit');


    Route::get('dashboard/userList',[\App\Http\Controllers\UserListController::class,'showAllUsers'])->name('userList');

    Route::get('dashboard/userList/edit/{user}',[\App\Http\Controllers\UserListController::class,'editUserList']);
});
require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::view('/','homepage')->name('home');

    Route::get('/acctg',[UserController::class,'loadAcctgPage'])->middleware('role:admin,bookeeper,auditor,audasst')->name('acctg');
    Route::get('/prod',[UserController::class,'loadAssemblePage'])->middleware('role:admin,assembler')->name('prod');

    Route::get('/admin', [AdminController::class, 'index'])->name('dash')->middleware('role:admin');
    Route::get('/admin/users',[AdminController::class,'manageUsers'])->name('usertool')->middleware('role:admin');

    Route::get('/acctg/new',[BookController::class,'newLedgerEntry'])->middleware(['role:admin,bookeeper,auditor'])->name('newledger');
    Route::post('/acctg/new',[BookController::class,'saveNewLedgerEntry'])->middleware('role:admin,bookeeper')->name('saveledger');
    Route::get('/acctg/view/all',[BookController::class,'showAllLedgers'])->middleware(['role:admin,bookeeper,auditor,audasst'])->name('ledgers');
    Route::get('/acctg/view/{id}',[BookController::class,'viewLedgerDetails'])->middleware(['role:admin,auditor,audasst'])->name('ledger');

    // New routes for managing roles and permissions
    Route::post('/admin/user/{user}/add-role', [AdminController::class, 'addRole'])->name('user.addRole')->middleware('role:admin');
    Route::post('/admin/user/{user}/remove-role', [AdminController::class, 'removeRole'])->name('user.removeRole')->middleware('role:admin');
    Route::post('/admin/user/{user}/add-permission', [AdminController::class, 'addPermission'])->name('user.addPermission')->middleware('role:admin');
    Route::post('/admin/user/{user}/remove-permission', [AdminController::class, 'removePermission'])->name('user.removePermission')->middleware('role:admin');

//    Route::get('/registerAdmin',[AdminController::class,'registerviaAdmin'])->name('adminRegistration')->middleware('admin');
    Route::post('/admin/user/{user}/delete', [AdminController::class, 'deleteUser'])->name('user.delete')->middleware('role:admin');
});




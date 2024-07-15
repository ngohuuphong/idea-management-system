<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CEOController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

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

//home
Route::controller(Controller::class)->group(function () {
    Route::get('/', 'index')->name('home');
});


Route::group(['prefix' => 'member', 'as' => 'member.'], function () {
    Route::controller(MemberController::class)->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/mypage', 'myPage')->name('myPage');
        Route::get('/post/{id}', 'post')->name('post')->where('id', '[0-9]+');
        Route::get('/post/new', 'newPost')->name('newPost');
    });
});

Route::group(['prefix' => 'manager', 'as' => 'manager.'], function () {
    Route::controller(ManagerController::class)->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/mypage', 'myPage')->name('myPage');
        Route::get('/post/{id}', 'post')->name('post')->where('id', '[0-9]+');
    });
});

Route::group(['prefix' => 'ceo', 'as' => 'ceo.'], function () {
    Route::controller(CEOController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/mypage', 'myPage')->name('myPage');
        Route::get('/ideal', 'ideal')->name('ideal');
        Route::get('/ideal/{id}', 'ideal')->name('ideal')->where('id', '[0-9]+');
        Route::get('/report', 'report')->name('report');
    });
});

Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
    Route::controller(AccountController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::get('/password-reset', 'passwordReset')->name('password-reset');
        Route::get('/signup', 'signup')->name('signup');
        Route::get('/logout', 'logout')->name('logout');
    });
});


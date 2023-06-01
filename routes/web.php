<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;

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

Auth::routes();

//Google
Route::get('/login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    // dashboard
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    // display campaign page
    Route::get('/campaign/step/1', [CampaignController::class, 'displayStep1'])->name('campaign.step1');
    Route::get('/campaign/step/2', [CampaignController::class, 'displayStep2'])->name('campaign.step2');
    Route::get('/campaign/step/3', [CampaignController::class, 'displayStep3'])->name('campaign.step3');

    // post campaign data
    Route::post('/store/step1', [CampaignController::class, 'storeStep1'])->name('store.step1');
    Route::post('/store/step2', [CampaignController::class, 'storeStep2'])->name('store.step2');
    Route::post('/store/step3', [CampaignController::class, 'storeStep3'])->name('store.step3');


    // profile
    Route::get('/profile', function () {
        return view('profile.index');
    });

    Route::get('/profile/edit', function () {
        return view('profile.edit');
    });

    Route::get('/profile/password', function () {
        return view('profile.password');
    });

    Route::get('/profile/deactivate', function () {
        return view('profile.deactivate');
    });
});

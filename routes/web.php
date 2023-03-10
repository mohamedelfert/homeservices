<?php

use App\Http\Livewire\Admin\Admin;
use App\Http\Livewire\Customer\Customer;
use App\Http\Livewire\Home;
use App\Http\Livewire\ServiceProvider\ServiceProvider;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',Home::class)->name('home');

// For Admin
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified','auth-admin'])->group(function () {
    Route::get('/admin/dashboard', Admin::class)->name('admin.dashboard');
});

// For Service Provider
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified','auth-service-provider'])->group(function () {
    Route::get('/service-provider/dashboard', ServiceProvider::class)->name('service-provider.dashboard');
});

// For Customer
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/customer/dashboard', Customer::class)->name('customer.dashboard');
});

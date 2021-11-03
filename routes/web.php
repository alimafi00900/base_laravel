<?php

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

Route::get("/test","App\Http\Controllers\adminController@test");




Route::prefix("/admin")->group(function (){
    Route::get("/","App\Http\Controllers\adminController@login")->name("admin.login");
    Route::post("/login-submit","App\Http\Controllers\adminController@login_submit")->name("admin.login_submit");
    Route::get("/logout","App\Http\Controllers\adminController@logout")->name("admin.logout");

    Route::middleware(["admin"])->group(function (){
        Route::get("/dashboard","App\Http\Controllers\adminController@dashboard")->name("admin.dashboard");



    });




});

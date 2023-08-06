<?php

use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\ticketController;
use App\Http\Controllers\user\adds\addsController;
use App\Http\Controllers\user\ticketController as UserTicketController;
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




Route::get('/',"App\Http\Controllers\user\mainController@home");

Route::get('/products/{slug}',"App\Http\Controllers\user\mainController@products");

Route::get('/search-product',"App\Http\Controllers\user\mainController@search_product")->name("user.search_product");


Route::get('/product/{slug}',"App\Http\Controllers\user\mainController@product")->name("user.product");

Route::get('/support',"App\Http\Controllers\user\mainController@support");




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// START ADMIN SECTION /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get("/admin", "App\Http\Controllers\admin\authController@login")->name("admin.login");
Route::prefix("/admin")->middleware(['web', 'admin_ban_ip'])->group(function () {
    //Route::get("/dsjhsdjhdsjjsdjdsjdsjk", "App\Http\Controllers\admin\adminController@sessions");
    Route::post("/login-submit", "App\Http\Controllers\admin\authController@login_submit")->name("admin.login_submit");
    Route::get("/logout", "App\Http\Controllers\admin\authController@logout")->name("admin.logout");
    Route::get("/verify-sms-code", "App\Http\Controllers\admin\authController@verify_sms_code")->name("admin.verify_sms_code");
    Route::post("/verify-sms-code-submit", "App\Http\Controllers\admin\authController@verify_sms_code_submit")->name("admin.verify_sms_code_submit");
    Route::middleware(["admin", "adminHaveAccess", "adminActive"])->group(function () {
        Route::get("/dashboard", "App\Http\Controllers\admin\adminController@dashboard")->name("admin.dashboard");
        Route::get("/dark-mood", "App\Http\Controllers\admin\adminController@dark_mood")->name("admin.dark_mood");

        Route::prefix("/settings")->group(function () {
            /////////////
            $section_name = "settings";
            $route_name = "admin.settings";
            $class_path = "App\Http\Controllers\SettingsController";
            //////////////
            getBasicAdminRoutes($section_name, $class_path);
        });

        Route::prefix("/templates")->group(function () {
            /////////////
            $section_name = "templates";
            $route_name = "admin.templates";
            $class_path = "App\Http\Controllers\TemplatesController";
            //////////////
            getBasicAdminRoutes($section_name, $class_path);
        });

        Route::prefix("/file-manager")->group(function () {
            /////////////
            $section_name = "fileManager";
            $route_name = "admin.fileManager";
            $class_path = "App\Http\Controllers\FileManager";
            //////////////
            getBasicAdminRoutes($section_name, $class_path);
            Route::post('/api/add-post', $class_path . "@add_post_api")->name($route_name . "_add_post_api");
        });



        Route::prefix("/articles")->group(function () {
            /////////////
            $section_name = "articles";
            /////////////
            getBasicAdminRoutes($section_name);
        });

        Route::prefix("/feedbacks")->group(function () {
            /////////////
            $section_name = "feedbacks";
            /////////////
            getBasicAdminRoutes($section_name);
        });



        Route::prefix("/return-money-logs")->group(function () {
            /////////////
            $section_name = "returnMoneyLogs";
            $route_name = "admin.returnMoneyLogs";
            $class_path = "App\Http\Controllers\admin\\returnMoneyLogs";
            /////////////
            getBasicAdminRoutes($section_name);
            Route::get("/confirm-return-money/{id}", $class_path . "@confirm_return_money")->name($route_name . "_confirm_return_money");
        });



        Route::prefix("/admin-users")->group(function () {
            /////////////
            $section_name = "adminUsers";
            /////////////
            $class_path = getBasicAdminRoutes($section_name);
        });




        Route::prefix("/general-info")->group(function () {
            Route::get("/change-store-status", "App\Http\Controllers\adminController@generalInfo_change_store_status")->name("admin.generalInfo_change_store_status");
            Route::get("/edit", "App\Http\Controllers\adminController@generalInfo_edit")->name("admin.generalInfo_edit");
            Route::post("/edit-submit", "App\Http\Controllers\adminController@generalInfo_edit_submit")->name("admin.generalInfo_edit_submit");
        });



        ///// start media
        ///////////////////////////////////////////////////////
        Route::prefix("/")->group(function () {
            $class_path = "App\Http\Controllers\admin\mediaController";
            Route::get('/media', $class_path . "@media")->name("admin.media");
            Route::get('/media-add', $class_path . "@media_add")->name("admin.media_add");
            Route::post('/media-add-post', $class_path . "@media_add_submit")->name("admin.media_add_submit");
            Route::post('/api/media-add-post', $class_path . "@media_add_post_api")->name("admin.media_add_post_api");
            Route::get('/media-delete', $class_path . "@media_delete")->name("admin.media_delete");
            Route::get('/media-clear-cache', $class_path . "@media_clear_cache_files")->name("admin.media_clear_cache_files");
        });
        ////////////////////////////////////////////////////
        ////// end media

    });


});
//Route::get('/test', function () {
//    $article = products::all();
//    return response($article, 200)->header('Content-Type', 'text/plain');
//});


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// END ADMIN SECTION /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


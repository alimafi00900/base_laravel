<?php

use App\Models\article;
use App\Models\products;
use Illuminate\Support\Facades\DB;
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

//Route::get("/test", "App\Http\Controllers\adminController@test");
Route::get("/test", "App\Http\Controllers\mainController@test");
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// Start User Section /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::prefix("/")->group(function () {
    Route::post("/login-submit", "App\Http\Controllers\mainController@login_submit")->name("user.login_submit");
    Route::get("/logout", "App\Http\Controllers\mainController@logout")->name("user.logout");

    /////////////////////////////////////////////////////////////////////////

    Route::get("/", "App\Http\Controllers\mainController@index")->name("user.index");

    Route::get("/roles", "App\Http\Controllers\mainController@roles")->name("user.roles");
    Route::get("/about-us", "App\Http\Controllers\mainController@about_us")->name("user.about_us");
    Route::get("/faq", "App\Http\Controllers\mainController@most_asked_questions")->name("user.most_asked_questions");
    Route::get("/contact-us", "App\Http\Controllers\mainController@contact_us")->name("user.contact_us");

    Route::get("/news", "App\Http\Controllers\mainController@news")->name("user.news");
    Route::get("/single-news/{slug}", "App\Http\Controllers\mainController@single_news")->name("user.single_news");

    Route::get("/articles", "App\Http\Controllers\mainController@articles")->name("user.articles");
    Route::get("/single-article/{slug}", "App\Http\Controllers\mainController@single_article")->name("user.single_article");

    Route::get("/branch/{slug}", "App\Http\Controllers\mainController@single_branch")->name("user.single_branch");
    Route::get("/product-category/{slug}", "App\Http\Controllers\mainController@single_product_category")->name("user.single_product_category");

    Route::get("/category", "App\Http\Controllers\mainController@category")->name("user.category");
    Route::get("/listTraining", "App\Http\Controllers\mainController@listTraining")->name("user.listTraining");
    Route::post("/comment-submit", "App\Http\Controllers\mainController@comment_submit")->name("user.comment_submit");

    Route::post("/update-user-infos", "App\Http\Controllers\mainController@update_user_infos")->name("user.update_user_infos");

    Route::get("/statute", "App\Http\Controllers\mainController@statute")->name("user.statute");

    Route::middleware('userAuth')->group(function () {
        Route::post("/order-submit/{category_id}", "App\Http\Controllers\mainController@order_submit")->name("user.order_submit");
        Route::get("/verify-payment", "App\Http\Controllers\mainController@verify_payment")->name("user.verify_payment");
    });
    Route::prefix("/panel")->middleware('userAuth')->group(function () {
        Route::get("/", "App\Http\Controllers\mainController@user_panel")->name("user.panel");
        Route::get("/comment-delete", "App\Http\Controllers\mainController@user_panel_comment_delete")->name("user.panel_comment_delete");
    });


    Route::prefix("/api")->group(function () {
        Route::get("/change-dark-mood", "App\Http\Controllers\mainController@api_change_dark_mood")->name("user.api_change_dark_mood");
        Route::get("/like-submit", "App\Http\Controllers\mainController@api_like_submit")->name("user.api_like_submit")->middleware('userAuth');
        Route::get("/mark-submit", "App\Http\Controllers\mainController@api_mark_submit")->name("user.api_mark_submit")->middleware('userAuth');
        Route::post("/login", "App\Http\Controllers\mainController@api_login")->name("user.api_login");
        Route::post("/register", "App\Http\Controllers\mainController@api_register")->name("user.api_register");
        Route::post("/verify-code", "App\Http\Controllers\mainController@api_verify_code")->name("user.api_verify_code");
        Route::post("/get-code", "App\Http\Controllers\mainController@api_get_code")->name("user.api_get_code");
        Route::get("/api-get-security-code-pic", "App\Http\Controllers\mainController@api_get_security_code_pic")->name("user.api_get_security_code_pic");
    });
});


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// End User Section /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// START ADMIN SECTION /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get("/masihdev", "App\Http\Controllers\adminController@login")->name("admin.login");
Route::prefix("/admin")->group(function () {
    Route::post("/login-submit", "App\Http\Controllers\adminController@login_submit")->name("admin.login_submit");
    Route::get("/logout", "App\Http\Controllers\adminController@logout")->name("admin.logout");
    Route::middleware(["admin"])->group(function () {
        Route::get("/dashboard", "App\Http\Controllers\adminController@dashboard")->name("admin.dashboard");
        Route::prefix("/users")->group(function () {
            Route::get("/", "App\Http\Controllers\adminController@users")->name("admin.users");
            Route::get("/single-user/{user_id}", "App\Http\Controllers\adminController@users_single_user")->name("admin.users_single_user");
            Route::get("/edit-information/{id}", "App\Http\Controllers\adminController@users_edit_information")->name("admin.users_edit_information");
            Route::post("/edit-information-submit/{id}", "App\Http\Controllers\adminController@users_edit_information_submit")->name("admin.users_edit_information_submit");
            Route::get("/change-access/{id}", "App\Http\Controllers\adminController@users_change_access")->name("admin.users_change_access");
            Route::get("/delete", "App\Http\Controllers\adminController@users_delete")->name("admin.users_delete");
            Route::post("/multiple-delete", "App\Http\Controllers\adminController@users_multiple_delete")->name("admin.users_multiple_delete");
        });


        Route::prefix("/product-categories")->group(function () {
            Route::get("/", "App\Http\Controllers\adminController@productCategories")->name("admin.productCategories");
            Route::get("/add-category", "App\Http\Controllers\adminController@productCategories_add_category")->name("admin.productCategories_add_category");
            Route::post("/add-category/add-category-submit", "App\Http\Controllers\adminController@productCategories_add_category_submit")->name("admin.productCategories_add_category_submit");
            Route::get("/edit-category/{id}", "App\Http\Controllers\adminController@productCategories_edit_category")->name("admin.productCategories_edit_category");
            Route::post("/edit-category/edit-category-submit/{id}", "App\Http\Controllers\adminController@productCategories_edit_category_submit")->name("admin.productCategories_edit_category_submit");
            Route::get("/delete", "App\Http\Controllers\adminController@productCategories_delete")->name("admin.productCategories_delete");
            Route::post("/multiple-delete", "App\Http\Controllers\adminController@productCategories_multiple_delete")->name("admin.productCategories_multiple_delete");
        });


        Route::prefix("/products")->group(function () {
            Route::get("/", "App\Http\Controllers\adminController@products")->name("admin.products");
            Route::get("/add-products", "App\Http\Controllers\adminController@products_add_product")->name("admin.products_add_product");
            Route::post("/add-products/add-product-submit", "App\Http\Controllers\adminController@products_add_product_submit")->name("admin.products_add_product_submit");
            Route::get("/edit-product/{product_id}", "App\Http\Controllers\adminController@products_edit_product")->name("admin.products_edit_product");
            Route::post("/edit-product-submit/{product_id}", "App\Http\Controllers\adminController@products_edit_product_submit")->name("admin.products_edit_product_submit");
            Route::get("/delete", "App\Http\Controllers\adminController@products_delete")->name("admin.products_delete");
            Route::post("/multiple-delete", "App\Http\Controllers\adminController@products_multiple_delete")->name("admin.products_multiple_delete");
        });

        Route::prefix("/orders")->group(function () {
            Route::get("/", "App\Http\Controllers\adminController@orders")->name("admin.orders");
            Route::get("/single-order/{id}", "App\Http\Controllers\adminController@single_order")->name("admin.single_order");
            Route::get("/change-status-order/{id}", "App\Http\Controllers\adminController@change_status_order")->name("admin.change_status_order");
        });


        ///// start media
        ///////////////////////////////////////////////////////
        Route::get('/media', "App\Http\Controllers\adminController@media")->name("admin.media");
        Route::get('/media-add', "App\Http\Controllers\adminController@media_add")->name("admin.media_add");
        Route::post('/media-add-post', "App\Http\Controllers\adminController@media_add_submit")->name("admin.media_add_submit");
        Route::post('/api/media-add-post', "App\Http\Controllers\adminController@media_add_post_api")->name("admin.media_add_post_api");
        Route::get('/media-delete', "App\Http\Controllers\adminController@media_delete")->name("admin.media_delete");
        Route::get('/media-clear-cache', "App\Http\Controllers\adminController@media_clear_cache_files")->name("admin.media_clear_cache_files");
        ////////////////////////////////////////////////////
        ////// end media

        ////// start article
        //////////////////////////////////////////////////
        Route::prefix("/articles")->group(function () {
            Route::get("/", "App\Http\Controllers\adminController@articles")->name("admin.articles");
            Route::get("/add-article", "App\Http\Controllers\adminController@articles_add")->name("admin.articles_add");
            Route::post("/add-article/add-article-submit", "App\Http\Controllers\adminController@articles_add_submit")->name("admin.articles_add_submit");
            Route::get("/edit-article/{id}", "App\Http\Controllers\adminController@articles_edit")->name("admin.articles_edit");
            Route::post("/edit-article/edit-article-submit/{id}", "App\Http\Controllers\adminController@articles_edit_submit")->name("admin.articles_edit_submit");
            Route::get("/delete", "App\Http\Controllers\adminController@articles_delete")->name("admin.articles_delete");
            Route::post("/multiple-delete", "App\Http\Controllers\adminController@articles_multiple_delete")->name("admin.articles_multiple_delete");
        });
        ////// end article
        ////////////////////////////////////////////////


        ////// start comment
        //////////////////////////////////////////////////
        Route::prefix("/comments")->group(function () {
            Route::get("/", "App\Http\Controllers\adminController@comments")->name("admin.comments");
            Route::get("/comments-add", "App\Http\Controllers\adminController@comments_submit")->name("admin.comments_submit");
        });
        ////// end comment
        ////////////////////////////////////////////////



        ////// start Notice
        //////////////////////////////////////////////////
        Route::prefix("/notices")->group(function () {
            Route::get("/", "App\Http\Controllers\adminController@notices")->name("admin.notices");
            Route::get("/add-notices", "App\Http\Controllers\adminController@notices_add")->name("admin.notices_add");
            Route::post("/add-notices/add-notices-submit", "App\Http\Controllers\adminController@notices_add_submit")->name("admin.notices_add_submit");
            Route::get("/edit-notices/{id}", "App\Http\Controllers\adminController@notices_edit")->name("admin.notices_edit");
            Route::post("/edit-notices/edit-notices-submit/{id}", "App\Http\Controllers\adminController@notices_edit_submit")->name("admin.notices_edit_submit");
            Route::get("/delete", "App\Http\Controllers\adminController@notices_delete")->name("admin.notices_delete");
            Route::post("/multiple-delete", "App\Http\Controllers\adminController@notices_multiple_delete")->name("admin.notices_multiple_delete");
        });
        ////// end Notice
        ////////////////////////////////////////////////

        ////// start Most Asked Questions
        //////////////////////////////////////////////////
        Route::prefix("/most-asked-questions")->group(function () {
            Route::get("/", "App\Http\Controllers\adminController@most_asked_questions")->name("admin.most_asked_questions");
            Route::get("/add-most-asked-questions", "App\Http\Controllers\adminController@most_asked_questions_add")->name("admin.most_asked_questions_add");
            Route::post("/add-most-asked-questions/add-most-asked-questions-submit", "App\Http\Controllers\adminController@most_asked_questions_add_submit")->name("admin.most_asked_questions_add_submit");
            Route::get("/edit-most-asked-questions/{id}", "App\Http\Controllers\adminController@most_asked_questions_edit")->name("admin.most_asked_questions_edit");
            Route::post("/edit-most-asked-questions/edit-most-asked-questions-submit/{id}", "App\Http\Controllers\adminController@most_asked_questions_edit_submit")->name("admin.most_asked_questions_edit_submit");
            Route::get("/delete", "App\Http\Controllers\adminController@most_asked_questions_delete")->name("admin.most_asked_questions_delete");
            Route::post("/multiple-delete", "App\Http\Controllers\adminController@most_asked_questions_multiple_delete")->name("admin.most_asked_questions_multiple_delete");
        });
        ////// end Most Asked Questions
        ////////////////////////////////////////////////


        ////////// start branches
        //////////////////////////////////////////

        Route::prefix("/branches")->group(function () {
            Route::get("/", "App\Http\Controllers\adminController@branches")->name("admin.branches");
            Route::get("/add", "App\Http\Controllers\adminController@branches_add")->name("admin.branches_add");
            Route::post("/add-submit", "App\Http\Controllers\adminController@branches_add_submit")->name("admin.branches_add_submit");
            Route::get("/edit/{id}", "App\Http\Controllers\adminController@branches_edit")->name("admin.branches_edit");
            Route::post("/edit-submit/{id}", "App\Http\Controllers\adminController@branches_edit_submit")->name("admin.branches_edit_submit");
            Route::get("/delete", "App\Http\Controllers\adminController@branches_delete")->name("admin.branches_delete");
            Route::post("/multiple-delete", "App\Http\Controllers\adminController@branches_multiple_delete")->name("admin.branches_multiple_delete");
        });

        ////////// end branches
        //////////////////////////////////////////


        ////////// start Menu Management
        //////////////////////////////////////////

        Route::prefix("/menuManagement")->group(function () {
            Route::get("/", "App\Http\Controllers\adminController@menuManagement")->name("admin.menuManagement");
            Route::get("/add", "App\Http\Controllers\adminController@menuManagement_add")->name("admin.menuManagement_add");
            Route::post("/add-submit", "App\Http\Controllers\adminController@menuManagement_add_submit")->name("admin.menuManagement_add_submit");
            Route::get("/edit/{id}", "App\Http\Controllers\adminController@menuManagement_edit")->name("admin.menuManagement_edit");
            Route::post("/edit-submit/{id}", "App\Http\Controllers\adminController@menuManagement_edit_submit")->name("admin.menuManagement_edit_submit");
            Route::get("/delete", "App\Http\Controllers\adminController@menuManagement_delete")->name("admin.menuManagement_delete");
            Route::post("/multiple-delete", "App\Http\Controllers\adminController@menuManagement_multiple_delete")->name("admin.menuManagement_multiple_delete");
        });

        ////////// end Menu Management
        //////////////////////////////////////////


        //////////////////////////////////////////

        Route::prefix("/points")->group(function () {
            Route::get("/", "App\Http\Controllers\adminController@points")->name("admin.points");
            Route::get("/add", "App\Http\Controllers\adminController@points_add")->name("admin.points_add");
            Route::post("/add-submit", "App\Http\Controllers\adminController@points_add_submit")->name("admin.points_add_submit");
            Route::get("/edit/{id}", "App\Http\Controllers\adminController@points_edit")->name("admin.points_edit");
            Route::post("/edit-submit/{id}", "App\Http\Controllers\adminController@points_edit_submit")->name("admin.points_edit_submit");
            Route::get("/delete", "App\Http\Controllers\adminController@points_delete")->name("admin.points_delete");
            Route::post("/multiple-delete", "App\Http\Controllers\adminController@points_multiple_delete")->name("admin.points_multiple_delete");
        });

        //////////////////////////////////////////


        ////////// start Admin Users
        //////////////////////////////////////////
        Route::prefix("/admin-users")->group(function () {
            Route::get("/", "App\Http\Controllers\adminController@admin_users")->name("admin.admin_users");
            Route::get("/add", "App\Http\Controllers\adminController@admin_users_add")->name("admin.admin_users_add");
            Route::post("/add-submit", "App\Http\Controllers\adminController@admin_users_add_submit")->name("admin.admin_users_add_submit");
            Route::get("/edit/{id}", "App\Http\Controllers\adminController@admin_users_edit")->name("admin.admin_users_edit");
            Route::post("/edit-submit/{id}", "App\Http\Controllers\adminController@admin_users_edit_submit")->name("admin.admin_users_edit_submit");
            Route::get("/change-role/{id}", "App\Http\Controllers\adminController@admin_users_change_role")->name("admin.admin_users_change_role");
            Route::get("/change-access/{id}", "App\Http\Controllers\adminController@admin_users_change_access")->name("admin.admin_users_change_access");
            Route::post("/change-password/{id}", "App\Http\Controllers\adminController@admin_users_change_password")->name("admin.admin_users_change_password");
            Route::get("/delete", "App\Http\Controllers\adminController@admin_users_delete")->name("admin.admin_users_delete");
            Route::post("/multiple-delete", "App\Http\Controllers\adminController@admin_users_multiple_delete")->name("admin.admin_users_multiple_delete");
        });
        ////////// end Admin Users
        //////////////////////////////////////////


        ////////// start Admin Users
        //////////////////////////////////////////
        Route::prefix("/general-info")->group(function () {
            Route::get("/edit", "App\Http\Controllers\adminController@generalInfo_edit")->name("admin.generalInfo_edit");
            Route::post("/edit-submit", "App\Http\Controllers\adminController@generalInfo_edit_submit")->name("admin.generalInfo_edit_submit");
        });
        ////////// end Admin Users
        //////////////////////////////////////////


        ////// apis

        Route::prefix("/api")->group(function () {
            Route::post("/get-product-categories", "App\Http\Controllers\adminController@api_get_product_categories")->name("admin.productCategories_api_get_product_categories");
            Route::post("/get-branches", "App\Http\Controllers\adminController@api_get_branches")->name("admin.branches_api_get_branches");
            Route::get("/product-category-tags", "App\Http\Controllers\adminController@api_product_category_tags")->name("admin.productCategories_api_product_category_tags");
            Route::get("/article-tags", "App\Http\Controllers\adminController@api_article_tags")->name("admin.productCategories_api_article_tags");
        });


    });


});


//Route::get('/test', function () {
//    $article = products::all();
//    return response($article, 200)->header('Content-Type', 'text/plain');
//});


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// END ADMIN SECTION /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

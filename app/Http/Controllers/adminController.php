<?php

namespace App\Http\Controllers;

use App\Http\Requests\addMedia;
use App\Http\Requests\adminAddCategoryReq;
use App\Http\Requests\adminEditUser;
use App\Http\Requests\adminAddMediaFileReq;
use App\Http\Requests\adminLoginReq;
use App\Http\Requests\adminAddProductReq;
use App\Http\Requests\adminEditOrderReq;
use App\Http\Requests\adminAddBranchReq;
use App\Http\Requests\adminMenuManagement;
use App\Http\Requests\adminAddPoints;
use App\Http\Requests\adminAddArticle;
use App\Http\Requests\adminAddMostAskedQuestions;
use App\Http\Requests\adminAddNotice;
use App\Imports\PeriodsImport;
use App\Models\article;
use App\Models\notice;
use App\Models\comment;
use App\Models\branch;
use App\Models\most_asked_question;
use App\Models\media;
use App\Models\point;
use App\Models\navLink;
use App\Models\product_category;
use App\Models\products;
use App\Models\User;
use App\Models\adminUser;
use App\Models\user_log;
use App\Models\order;
use App\Models\wp_wc_order_stats;
use App\Models\user_point_history;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Http\Helpers\jsonStorage;
use App\Models\generalInfo;
use function Symfony\Component\String\s;

class adminController extends Controller
{

    public function test()
    {

    }

    public function api_get_product_categories(Request $request)
    {
        $search = $request->input('search');
        if ($search != null and $search != "") {
            $product_categories = product_category::where(
                function ($query) use ($search) {
                    $query->orWhere("id", "LIKE", $search)
                        ->orWhere("title", "LIKE", "%" . $search . "%")
                        ->orWhere("slug", "LIKE", "%" . $search . "%");
                }
            )->get();
        } else {
            $product_categories = product_category::all();
        }
        $out = [];
        foreach ($product_categories as $product_category) {

            $out += [$product_category->id => ["name" => $product_category->title]];

        }
        return response(["listItems" => $out, "success" => 0]);
    }


    public function api_get_branches(Request $request)
    {
        $search = $request->input('search');
        if ($search != null and $search != "") {
            $branches = branch::where(
                function ($query) use ($search) {
                    $query->orWhere("id", "LIKE", $search)
                        ->orWhere("name", "LIKE", "%" . $search . "%")
                        ->orWhere("display_name", "LIKE", "%" . $search . "%");
                }
            )->get();
        } else {
            $branches = branch::all();
        }
        $out = [];
        foreach ($branches as $branch) {

            $out += [$branch->id => ["name" => $branch->display_name]];

        }
        return response(["listItems" => $out, "success" => 0]);
    }


    public function api_product_category_tags(Request $request)
    {
        $action = $request->get("action");
        if (isValidValue($action) != true) {
            return response(["errMsg" => "خطایی رخ داده است"]);
        }
        $product_categories_tags = new jsonStorage();
        if ($action == "all") {
            $json = $product_categories_tags->from("product_categories_tags")->all();
            return response(["listItems" => $json, "success" => 0]);
        } elseif ($action == "update") {
            $values = $request->get("value");
            if (isValidValue($values) != true) {
                return response(["errMsg" => "خطایی رخ داده است"]);
            }
            $product_categories_tags->from("product_categories_tags")->append(strToArray($values));
            return response(["success" => 0]);
        } elseif ($action == "delete") {
            $index = $request->get("index");
            if (isValidValue($index) != true) {
                return response(["errMsg" => "خطایی رخ داده است"]);
            }
            $product_categories_tags->from("product_categories_tags")->deleteIndex($index);
            return response(["success" => 0]);
        } else {
            return response(["errMsg" => "خطایی رخ داده است"]);
        }
    }

    public function api_article_tags(Request $request)
    {
        $action = $request->get("action");
        if (isValidValue($action) != true) {
            return response(["errMsg" => "خطایی رخ داده است"]);
        }
        $articles_tags = new jsonStorage();
        if ($action == "all") {
            $json = $articles_tags->from("articles_tags")->all();
            return response(["listItems" => $json, "success" => 0]);
        } elseif ($action == "update") {
            $values = $request->get("value");
            if (isValidValue($values) != true) {
                return response(["errMsg" => "خطایی رخ داده است"]);
            }
            $articles_tags->from("articles_tags")->append(strToArray($values));
            return response(["success" => 0]);
        } elseif ($action == "delete") {
            $index = $request->get("index");
            if (isValidValue($index) != true) {
                return response(["errMsg" => "خطایی رخ داده است"]);
            }
            $articles_tags->from("articles_tags")->deleteIndex($index);
            return response(["success" => 0]);
        } else {
            return response(["errMsg" => "خطایی رخ داده است"]);
        }
    }

    ////////////////
    public function login()
    {
        if (Auth::guard("admin")->check() != true) {
            return view("admin.login.login");
        } else {
            return redirect(route("admin.dashboard"));
        }
    }

    public function login_submit(adminLoginReq $request)
    {
        $remember = false;
        if ($request->input('remember') == "on") {
            $remember = true;
        }
        if (Auth::guard("admin")->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember)) {
            return redirect(route("admin.dashboard"));
        } else {
            return back()->withErrors("ایمیل یا پسورد اشتباه است");
        }
    }

    public function logout()
    {
        Auth::guard("admin")->logout();
        return redirect(route("admin.login"));
    }

    ///////////////////
    public function dashboard()
    {
        return view("admin.admin_dashboard");
    }

    // users

    public function users(Request $request)
    {
        $searchValue = $request->get("searchValue");
        if (isValidValue($searchValue)) {
            session(["searchValue" => $searchValue]);
            $users = User::where(
                function ($query) use ($searchValue) {
                    $query->orWhere("ID", $searchValue)
                        ->orWhere("user_login", "LIKE", "%" . $searchValue . "%")
                        ->orWhere("display_name", "LIKE", "%" . $searchValue . "%")
                        ->orWhere("last_ip", "LIKE", "%" . $searchValue . "%");
                }
            )->get();
        } else {
            session()->forget("searchValue");
            $users = User::all();
        }
        $pageItems = getPageItems($users, $request->get("page"));
        $users = $pageItems["items"];
        $allPages = $pageItems["allPages"];
        $num = $pageItems["currentPage"];
        return view("admin.user.users", compact("users", "allPages", "num"));
    }

    public function users_single_user($user_id)
    {
        if (isValidValue($user_id) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $user = User::where("ID", $user_id)->first();
        if ($user != null) {
            return view("admin.user.users_single_user", compact("user"));
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }

    }


    public function users_change_access($id, Request $request)
    {
        $action = $request->get("action");
        if (is_numeric($id) != true or isValidValue($action, true) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $user = User::where("ID", $id);
        if ($user->first() != null) {
            if ($action == "1") {
                $user->update(["status" => "active"]);
            } elseif ($action == "2") {
                $user->update(["status" => "suspended"]);
            } elseif ($action == "3") {
                $user->update(["status" => "blocked"]);
            }
            return back()->with(["msg" => "وضعیت حساب شماره " . $id . " با موفقیت ویرایش یافت شد"]);
        } else {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
    }

    public function users_edit_information($user_id)
    {
        if (isValidValue($user_id) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $user = User::where("ID", $user_id)->first();
        if ($user != null) {
            return view("admin.user.users_edit", compact("user"));
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function users_edit_information_submit($id, adminEditUser $request)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $user = User::where("ID", $id);
        if ($user->first() != null) {
            $user->update(["display_name" => $request->input("display_name"), 'user_login' => $request->input("user_login"), 'user_nicename' => $request->input("user_login")]);
            return redirect(route("admin.users_single_user", [$id]))->with(["msg" => " کاربر شماره " . $id . " با موفقیت ویرایش شد"]);
        } else {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
    }

    public function users_delete(Request $request)
    {
        $id = $request->get("id");
        if (isValidValue($id) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $user = User::where("ID", $id);
        if ($user->first() != null) {
            $user->delete();
            return redirect(route("admin.users"))->with(["msg" => " کاربر شماره " . $id . " با موفقیت حدف شد"]);
        } else {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
    }

    public function users_multiple_delete(Request $request)
    {

        $ids = json_decode($request->input("listItems"));
        foreach ($ids as $id) {
            $user = User::where("ID", $id);
            if ($user->first() != null) {
                $user->delete();
            }
        }
        return redirect(route("admin.users"))->with(["msg" => "کاربران با موفقیت حذف شدند"]);
    }
    // end users


/////// start branch
///////////////////////////////////////////////////////////


    public function branches(Request $request)
    {
        $searchValue = $request->get("searchValue");
        if (isValidValue($searchValue)) {
            session(["searchValue" => $searchValue]);
            $branches = branch::where(
                function ($query) use ($searchValue) {
                    $query->orWhere("id", $searchValue)
                        ->orWhere("name", "LIKE", "%" . $searchValue . "%")
                        ->orWhere("display_name", "LIKE", "%" . $searchValue . "%");
                }
            )->get();
        } else {
            session()->forget("searchValue");
            $branches = branch::all();
        }
        $pageItems = getPageItems($branches, $request->get("page"));
        $items = $pageItems["items"];
        $allPages = $pageItems["allPages"];
        $num = $pageItems["currentPage"];
        return view("admin.branches.branches", compact("items", "allPages", "num"));
    }

    public function branches_add()
    {
        return view("admin.branches.branches_add");
    }

    public function branches_add_submit(adminAddBranchReq $request)
    {
        $branch = new branch();
        $branch->name = makeSlug(new branch(), "name", $request->input("name"));
        $branch->display_name = $request->input("display_name");
        $branch->content = $request->input("content");
        if (($itemFile = $request->file('file_poster')) != null) {
            $nameItem = randomStr(60) . '.' . $itemFile->getClientOriginalExtension();
            $itemFile->move(public_path('/userAssets/img'), $nameItem);
            $branch->poster = "/userAssets/img/" . $nameItem;
        }
        $branch->save();
        return redirect(route("admin.branches"))->with(["msg" => "شاخه جدید با موفقیت ایجاد شد"]);
    }

    public function branches_edit($id)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $item = branch::where("id", $id)->first();
        if ($item != null) {
            return view("admin.branches.branches_edit", compact("item"));
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function branches_edit_submit($id, adminAddBranchReq $request)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $branch = branch::where("id", $id);
        if ($branch->first() != null) {
            $branch->update([
                "name" => makeSlug(new branch(), "name", $request->input("name"), $branch->first()->name),
                "display_name" => $request->input("display_name"),
                'content' => $request->input("content"),
            ]);
            if (($itemFile = $request->file('file_poster')) != null) {
                $nameItem = randomStr(60) . '.' . $itemFile->getClientOriginalExtension();
                $itemFile->move(public_path('/userAssets/img'), $nameItem);
                $branch->update(["poster" => "/userAssets/img/" . $nameItem]);
            }
            return redirect(route("admin.branches"))->with(["msg" => "شاخه " . $id . " با موفقیت ویرایش یافت"]);
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function branches_delete(Request $request)
    {
        $id = $request->get("id");
        if (isValidValue($id) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $branch = branch::where("id", $id);
        if ($branch->first() != null) {
            $branch->delete();
            return redirect(route("admin.branches"))->with(["msg" => " شاخه شماره " . $id . " با موفقیت حدف شد"]);
        } else {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
    }

    public function branches_multiple_delete(Request $request)
    {
        $ids = json_decode($request->input("listItems"));
        foreach ($ids as $id) {
            $branch = branch::where("id", $id);
            if ($branch->first() != null) {
                $branch->delete();
            }
        }
        return redirect(route("admin.branches"))->with(["msg" => "شاخه ها با موفقیت حذف شدند"]);
    }

///////// end branch


    /////// product-categories

    public function productCategories(Request $request)
    {
        $searchValue = $request->get("searchValue");
        if (isValidValue($searchValue)) {
            session(["searchValue" => $searchValue]);
            $productCategories = product_category::where(
                function ($query) use ($searchValue) {
                    $query->orWhere("id", $searchValue)
                        ->orWhere("title", "LIKE", "%" . $searchValue . "%")
                        ->orWhere("slug", "LIKE", "%" . $searchValue . "%");
                }
            )->get();
        } else {
            session()->forget("searchValue");
            $productCategories = product_category::all();
        }
        $pageItems = getPageItems($productCategories, $request->get("page"));
        $productCategories = $pageItems["items"];
        $allPages = $pageItems["allPages"];
        $num = $pageItems["currentPage"];
        return view("admin.productCategory.productCategories", compact("productCategories", "allPages", "num"));
    }

    public function productCategories_add_category()
    {
        return view("admin.productCategory.productCategories_add");
    }

    public function productCategories_add_category_submit(adminAddCategoryReq $request)
    {
        $productCategory = new product_category();
        $productCategory->title = $request->input("title");
        $productCategory->slug = makeSlug(new product_category(), "slug", $request->input("title"));
        $status = "active";
        if ($request->input("status") == "2") {
            $status = "deactivate";
        }
        if (($itemFile = $request->file('file')) != null) {
            $nameItem = randomStr(60) . '.' . $itemFile->getClientOriginalExtension();
            $itemFile->move(public_path('/userAssets/img'), $nameItem);
            $productCategory->img_link = "/userAssets/img/" . $nameItem;
        }
        if (($itemFile = $request->file('file_poster')) != null) {
            $nameItem = randomStr(60) . '.' . $itemFile->getClientOriginalExtension();
            $itemFile->move(public_path('/userAssets/img'), $nameItem);
            $productCategory->poster = "/userAssets/img/" . $nameItem;
        }
        $productCategory->status = $status;
        $productCategory->tags = $request->input("tags");
        $productCategory->branches = $request->input("branches");
        $productCategory->forms = $request->input("forms");
        $productCategory->content = $request->input("content");
        $productCategory->instagram_link = $request->input("instagram_link");
        $productCategory->whatsapp_link = $request->input("whatsapp_link");
        $productCategory->date = strval(verta()->now()->format('Y-m-d'));
        $productCategory->time = strval(verta()->now()->format('H:i:s'));
        $productCategory->save();
        return redirect(route("admin.productCategories"))->with(["msg" => "دسته بندی جدید با موفقیت ایجاد شد"]);
    }

    public function productCategories_edit_category($id)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $productCategory = product_category::where("id", $id)->first();
        if ($productCategory != null) {
            $tags = strToArray($productCategory->tags);
            $jsonStorage = new jsonStorage();
            foreach ($tags as $tag) {
                if ($jsonStorage->from("product_categories_tags")->where($tag)->exist() != true) {

                    $jsonStorage->from("product_categories_tags")->where()->append($tag);
                }
            }
            return view("admin.productCategory.productCategories_edit", compact("productCategory"));
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function productCategories_edit_category_submit($id, adminAddCategoryReq $request)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $productCategory = product_category::where("id", $id);

        if ($productCategory->first() != null) {
            $status = "active";
            if ($request->input("status") == "2") {
                $status = "deactivate";
            }
            $productCategory->update([
                "title" => $request->input("title"),
                "status" => $status,
                "tags" => $request->input("tags"),
                "branches" => $request->input("branches"),
                "instagram_link" => $request->input("instagram_link"),
                "whatsapp_link" => $request->input("whatsapp_link"),
                "forms" => $request->input("forms"),
                "content" => $request->input("content")
            ]);
            if ($request->input("title") != $productCategory->first()->title) {
                $productCategory->update(["slug" => makeSlug(new product_category(), "slug", $request->input("title")),]);
            }
            if (($itemFile = $request->file('file')) != null) {
                if (File::exists(public_path($productCategory->first()->img_link))) {
                    File::delete(public_path($productCategory->first()->img_link));
                }
                $nameItem = randomStr(60) . '.' . $itemFile->getClientOriginalExtension();
                $itemFile->move(public_path('/userAssets/img'), $nameItem);
                $productCategory->update(["img_link" => "/userAssets/img/" . $nameItem]);
            }
            if (($itemFile = $request->file('file_poster')) != null) {
                if (File::exists(public_path($productCategory->first()->img_link))) {
                    File::delete(public_path($productCategory->first()->img_link));
                }
                $nameItem = randomStr(60) . '.' . $itemFile->getClientOriginalExtension();
                $itemFile->move(public_path('/userAssets/img'), $nameItem);
                $productCategory->update(["poster" => "/userAssets/img/" . $nameItem]);
            }

            return redirect(route("admin.productCategories"))->with(["msg" => "دسته بندی " . $id . " با موفقیت ویرایش یافت"]);
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function productCategories_delete(Request $request)
    {
        $id = $request->get("id");
        if (isValidValue($id) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $product_category = product_category::where("id", $id);
        if ($product_category->first() != null) {
            $product_category->delete();
            return redirect(route("admin.productCategories"))->with(["msg" => " دسته بندی شماره " . $id . " با موفقیت حدف شد"]);
        } else {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
    }

    public function productCategories_multiple_delete(Request $request)
    {
        $ids = json_decode($request->input("listItems"));
        foreach ($ids as $id) {
            $product_category = product_category::where("id", $id);
            if ($product_category->first() != null) {
                $product_category->delete();
            }
        }
        return redirect(route("admin.productCategories"))->with(["msg" => "دسته بندی ها با موفقیت حذف شدند"]);
    }

    //// end product-categories
    /////// products

    public function products(Request $request)
    {
        $searchValue = $request->get("searchValue");
        if (isValidValue($searchValue)) {
            session(["searchValue" => $searchValue]);
            $products = products::where(
                function ($query) use ($searchValue) {
                    $query->orWhere("id", $searchValue)
                        ->orWhere("title", "LIKE", "%" . $searchValue . "%")
                        ->orWhere("slug", "LIKE", "%" . $searchValue . "%");
                }
            )->get();
        } else {
            session()->forget("searchValue");
            $products = products::all();
        }
        $pageItems = getPageItems($products, $request->get("page"));
        $products = $pageItems["items"];
        $allPages = $pageItems["allPages"];
        $num = $pageItems["currentPage"];
        return view("admin.product.products", compact("products", "allPages", "num"));
    }

    public function products_add_product()
    {
        return view("admin.product.products_add");
    }

    public function products_add_product_submit(adminAddProductReq $request)
    {
        $product = new products();
        $product->title = $request->input("title");
        $product->slug = makeSlug(new products(), "slug", $request->input("title"));
        $status = "active";
        if ($request->input("status") == "2") {
            $status = "deactivate";
        }
        $price = $request->input("price");
        if (isValidValue($price, true) != true) {
            return back()->withErrors("قیمت به درستی وارد نشده است");
        }

        $productCategory_id = $request->input("product_categories");
        if (product_category::where("id", $productCategory_id)->first() == null) {
            return back()->withErrors("دسته بندی با این اطلاعات وجود ندارد");
        }
        $product->productCategory_id = $productCategory_id;
        $product->price = $price;
        $product->status = $status;
        if (($itemFile = $request->file('file')) != null) {
            $nameItem = randomStr(60) . '.' . $itemFile->getClientOriginalExtension();
            $itemFile->move(public_path('/userAssets/img'), $nameItem);
            $product->img_link = "/userAssets/img/" . $nameItem;
        }
        $product->content = $request->input("content");
        $product->product_type = $request->input("product_type");
        $product->stock_count = $request->input("stock_count");
        $product->date = strval(verta()->now()->format('Y-m-d'));
        $product->time = strval(verta()->now()->format('H:i:s'));
        $product->save();
        return redirect(route("admin.products"))->with(["msg" => "محصصول  جدید با موفقیت ایجاد شد"]);
    }

    public function products_edit_product($id)
    {
        $product = products::where("id", $id)->first();
        if ($product != null) {
            return view("admin.product.products_edit", compact("product"));
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }

    }

    public function products_edit_product_submit($id, adminAddProductReq $request)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $product = products::where("id", $id);

        if ($product->first() != null) {
            $status = "active";
            if ($request->input("status") == "2") {
                $status = "deactivate";
            }
            if ($request->input("title") != $product->first()->title) {
                $product->update(["slug" => makeSlug(new products(), "slug", $request->input("title")),]);
            }
            $product->update([
                "title" => $request->input("title"),
                "status" => $status,
                "content" => $request->input("content"),
                "price" => $request->input("price"),
                "product_type" => $request->input("product_type"),
                "productCategory_id" => $request->input("product_categories"),
                "slug" => makeSlug(new products(), "slug", $request->input("title")),
            ]);
            $stock_count_plus = $request->input("stock_count_plus");
            if (isValidValue($stock_count_plus) != false) {
                if (is_numeric($stock_count_plus) == true) {
                    $stock_count_plus = intval($stock_count_plus);
                    $stock = intval($product->first()->stock_count);
                    $stock_current = $stock - $stock_count_plus;
                    if ($stock_current < 0) {
                        return back()->withErrors("مقدار کاهش موجودی بیشتر از حد مجاز است");
                    }
                    $product->update(['stock_count' => $stock_current]);
                } else {
                    return back()->withErrors('مقدار افزایش موجودی نا معتبر است');
                }
            }
            if (($itemFile = $request->file('file')) != null) {
                if (File::exists(public_path($product->first()->img_link))) {
                    File::delete(public_path($product->first()->img_link));
                }
                $nameItem = randomStr(60) . '.' . $itemFile->getClientOriginalExtension();
                $itemFile->move(public_path('/userAssets/img'), $nameItem);
                $product->update(["img_link" => "/userAssets/img/" . $nameItem]);
            }
            return redirect(route("admin.products"))->with(["msg" => "محصول " . $id . " با موفقیت ویرایش یافت"]);
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function products_delete(Request $request)
    {
        $id = $request->get("id");
        if (isValidValue($id) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $product = products::where("id", $id);
        if ($product->first() != null) {
            $product->delete();
            return redirect(route("admin.products"))->with(["msg" => " محصول شماره " . $id . " با موفقیت حدف شد"]);
        } else {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
    }

    public function products_multiple_delete(Request $request)
    {
        $ids = json_decode($request->input("listItems"));
        foreach ($ids as $id) {
            $product = products::where("id", $id);
            if ($product->first() != null) {
                $product->delete();
            }
        }
        return redirect(route("admin.products"))->with(["msg" => "محصولات با موفقیت حذف شدند"]);
    }
    //// end products

    ///// orders

    public function orders(Request $request)
    {
        $orders = order::where('id', '!=', '');
        if (isValidValue($request->get('filters-status'))) {
            $orders = $orders->where('status', $request->get('filters-status'));
        }
        if (isValidValue($request->get('filters-price-custom-min'))) {
            $orders = $orders->where('amount', '>=', $request->get('filters-price-custom-min'));
        }
        if (isValidValue($request->get('filters-price-custom-max'))) {
            $orders = $orders->where('amount', '<=', $request->get('filters-price-custom-max'));
        }
        if (isValidValue($request->get('filters-price-sort'))) {
            if ($request->get('filters-price-sort') == "order-price-lth") {
                $orders = $orders->orderBy('amount', 'DESC');
            }
            if ($request->get('filters-price-sort') == "order-price-htl") {
                $orders = $orders->orderBy('amount', 'ASC');
            }
        }
        if (isValidValue($request->get('filters-product-category'))) {
            $orders = $orders->where('productCategory_id', $request->get('filters-product-category'));
        }
        if (isValidValue($request->get('filters-single-product'))) {
            $orders = $orders->where('products', 'LIKE', "%\"" . $request->get('filters-single-product') . "\":%");
        }
        $searchValue = $request->get("searchValue");
        if (isValidValue($searchValue)) {
            session(["searchValue" => $searchValue]);
            $orders = $orders->where(
                function ($query) use ($searchValue) {
                    $query->orWhere("id", $searchValue)
                        ->orWhere("user_id", "LIKE", "%" . $searchValue . "%")
                        ->orWhere("payment_type", "LIKE", "%" . $searchValue . "%")
                        ->orWhere("ip", "LIKE", "%" . $searchValue . "%")
                        ->orWhere("ref_id", "LIKE", "%" . $searchValue . "%")
                        ->orWhere("user_login", "LIKE", "%" . $searchValue . "%")
                        ->orWhere("user_display_name", "LIKE", "%" . $searchValue . "%")
                        ->orWhere("products", "LIKE", "%\"" . $searchValue . "\":%")
                        ->orWhere("productCategory_id", "LIKE", "%" . $searchValue . "%")
                        ->orWhere("wallet_transaction_id", "LIKE", "%" . $searchValue . "%");
                }
            )->get();
        } else {
            session()->forget("searchValue");
            $orders = $orders->get();
        }
        $pageItems = getPageItems($orders, $request->get("page"));
        $orders = $pageItems["items"];
        $allPages = $pageItems["allPages"];
        $num = $pageItems["currentPage"];
        $gets = $request->query();
        return view("admin.order.orders", compact("orders", "allPages", "num", 'gets'));
    }

    public function single_order($id)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $order = order::where("id", $id)->first();
        if ($order != null) {
            $items = json_decode($order->products);
            $fields = json_decode($order->fields);
            $user = User::where('ID', $order->user_id)->first();
            $userLogs = user_log::where("user_id", $user->ID)->where("log_type", "order_log")->where("order_id", $id)->where("status", "active")->get()->reverse();
            return view("admin.order.orders_single_order", compact("order", 'items', 'fields', "user", "userLogs"));
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function change_status_order($id, Request $request)
    {
        $status = $request->get('status');
        $statuses = getStatus();
        if (isValidValue($id) != true or isValidValue($status) != true or array_key_exists($status, $statuses) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $order = order::where("id", $id);
        if ($order->first() != null) {
            $user = User::where("ID", $order->first()->user_id)->first();
            userLog($order->first()->user_id, "order_log", 'وضعیت سفارش توسط ' . Auth::guard('admin')->user()->display_name . ' از ' . getProperty(getStatus($order->first()->status), "display_name") . " به " . getProperty(getStatus($status), "display_name") . ' تغییر کرد', $order->first()->id);
            ///////////////
            if ($status == "wrong_information") {
                sendSms(phoneNumberWithZero(User::where("ID", $order->first()->user_id)->first()->user_login), 'wronginfo', $order->first()->id);
            } else if ($status == "impossible_to_do") {
                sendSms(phoneNumberWithZero(User::where("ID", $order->first()->user_id)->first()->user_login), 'cannotbecomplete', $order->first()->id);
            } else if ($status == "completed") {
                sendSms(phoneNumberWithZero(User::where("ID", $order->first()->user_id)->first()->user_login), 'complete', $user->user_nicename, '', $order->first()->id);
            }
            ////////////////
            $order->update(['status' => $status]);
            return back()->with(['msg' => 'وضعیت سفارش با موفقیت ویرایش یافت']);
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }
    /////end orders


    ///// admin Users

    public function admin_users(Request $request)
    {
        $searchValue = $request->get("searchValue");
        if ($searchValue != "" and $searchValue != null) {
            session(["searchValue" => $searchValue]);
            $admin_users = adminUser::where(
                function ($query) use ($searchValue) {
                    $query->orWhere("id", $searchValue)
                        ->orWhere("name", "LIKE", "%" . $searchValue . "%");
                }
            )->get();
        } else {
            session()->forget("searchValue");
            $admin_users = adminUser::all();
        }
        $pageItems = getPageItems($admin_users, $request->get("page"));
        $admin_users = $pageItems["items"];
        $allPages = $pageItems["allPages"];
        $num = $pageItems["currentPage"];
        return view("admin.adminUser.adminUsers", compact("admin_users", "allPages", "num"));
    }

    public function admin_users_add()
    {
//        $permissions = plugin_class_management_admin_permission_contents::all();
        return view("admin.adminUser.adminUsers_add");
//        compact("permissions")
    }


    public function admin_users_edit($id)
    {
        if (is_numeric($id) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $admin_user = adminUser::where("id", $id)->first();
        if ($admin_user != null) {
//            $permissions = plugin_class_management_admin_permission_contents::all();
            return view("admin.adminUser.adminUsers_edit", compact("admin_user"));
//            , "permissions"
        } else {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
    }



    ///// end admin Users
    ///////////media

    public function media(Request $request)
    {
        $searchValue = $request->get("searchValue");
        if ($searchValue != "" and $searchValue != null) {
            session(["searchValue" => $searchValue]);
            $files = media::where(
                function ($query) use ($searchValue) {
                    $query->orWhere("id", $searchValue)
                        ->orWhere("name", "LIKE", "%" . $searchValue . "%");
                }
            )->get();
        } else {
            session()->forget("searchValue");
            $files = media::all();
        }
        $pageItems = getPageItems($files, $request->get("page"));
        $files = $pageItems["items"];
        $allPages = $pageItems["allPages"];
        $num = $pageItems["currentPage"];
        return view('admin.media.media', compact('files', 'allPages', 'num'));
    }

    public function media_add()
    {
        return view('admin.media.addMedia');
    }


    public function media_add_submit(adminAddMediaFileReq $request)
    {
        if (($file = $request->file('file')) != null) {
            if (!file_exists('uploads/')) {
                mkdir('uploads/', 0777, true);
            }
            $media = new media();
            $name = $request->input('name');
            if ($name == '' or $name == null) {
                $name = $request->file('file')->getClientOriginalName();
            }
            $media->name = makeSlug(new media(), 'name', $name);
            $media->size = $file->getSize();
            $media->type = $file->getMimeType();
            $media->date = strval(verta()->now()->format('Y-m-d'));
            $media->time = strval(verta()->now()->format('H:i:s'));
            $fileName = randomStr(60) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);
            $media->link = 'uploads/' . $fileName;
            $media->save();
            return redirect(route('admin.media'))->with(['msg' => 'فایل با موفقیت ایجاد شد']);
        } else {
            return back()->withErrors('خطایی رخ داده است');
        }
    }

    public function media_add_post_api(Request $request)
    {
        if (($file = $request->file('file')) != null) {
            if (!file_exists('uploads/')) {
                mkdir('uploads/', 0777, true);
            }
            $media = new media();
            $name = $request->input('name');
            if ($name == '' or $name == null) {
                $name = $request->file('file')->getClientOriginalName();
            }
            $media->name = makeSlug(new media(), 'name', $name);
            $media->size = $file->getSize();
            $media->type = $file->getMimeType();
            $media->date = strval(verta()->now()->format('Y-m-d'));
            $media->time = strval(verta()->now()->format('H:i:s'));
            $fileName = randomStr(60) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);
            $linkFile = 'uploads/' . $fileName;
            $media->link = $linkFile;
            $media->save();
            return json_encode(['location' => URL::to('/') . '/' . $linkFile]);;
        } else {
            return abort(500);
        }
    }

    public function media_delete(Request $request)
    {
        $id = $request->input("id");
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $media = media::where('id', $id);
        if ($media->first() != null) {
            if (File::delete(public_path() . '/' . $media->first()->link)) {
                $media->delete();
                return back()->with(['msg' => 'فایل ' . $id . ' با موفقیت ایجاد شد']);
            }
        } else {
            return back()->withErrors('خطایی رخ داده است');
        }
    }


    public function media_clear_cache_files()
    {
        if (!file_exists('uploads/')) {
            mkdir('uploads/', 0777, true);
        }
        $listFiles = scandir('uploads/');
        $count = 0;
        foreach ($listFiles as $item) {
            if (media::where('link', 'uploads/' . $item)->first() == null) {
                if (File::delete(public_path() . '/' . 'uploads/' . $item)) {
                    $count += 1;
                }
            }
        }
        return back()->with(['msg' => $count . ' اضافی با موفقیت پاک شد']);
    }


///////// end media


/////////// Start article
///////////////////////////////////////////////////////////


    public function articles(Request $request)
    {
        $searchValue = $request->get("searchValue");
        if (isValidValue($searchValue)) {
            session(["searchValue" => $searchValue]);
            $articles = article::where(
                function ($query) use ($searchValue) {
                    $query->orWhere("id", $searchValue)
                        ->orWhere("title", "LIKE", "%" . $searchValue . "%");
                }
            )->get();
        } else {
            session()->forget("searchValue");
            $articles = article::all();
        }
        $pageItems = getPageItems($articles, $request->get("page"));
        $articles = $pageItems["items"];
        $allPages = $pageItems["allPages"];
        $num = $pageItems["currentPage"];
        return view("admin.article.articles", compact("articles", "allPages", "num"));
    }

    public function articles_add()
    {
        return view("admin.article.articles_add");
    }

    public function articles_add_submit(adminAddArticle $request)
    {
        $articles = new article();
        $articles->title = $request->input("title");
        $articles->slug = makeSlug(new article(), "slug", $request->input("title"));
        $articles->content = $request->input("content");
        $articles->tags = $request->input("tags");
        $articles->author_id = Auth::guard("admin")->user()->id;
        $articles->status = "active";
        if ($request->input("status") == "2") {
            $articles->status = "deactivate";
        }
        $articles->article_category = "news";
        if ($request->input("articleCategory") == "2") {
            $articles->article_category = "article";
        }
        if (($itemFile = $request->file('file')) != null) {
            $nameItem = randomStr(60) . '.' . $itemFile->getClientOriginalExtension();
            $itemFile->move(public_path('/userAssets/img'), $nameItem);
            $articles->img_link = "/userAssets/img/" . $nameItem;
        }
        if (($itemFile = $request->file('file_poster')) != null) {
            $nameItem = randomStr(60) . '.' . $itemFile->getClientOriginalExtension();
            $itemFile->move(public_path('/userAssets/img'), $nameItem);
            $articles->poster = "/userAssets/img/" . $nameItem;
        }
        $articles->tags = $request->input("tags");
        $articles->instagram_link = $request->input("instagram_link");
        $articles->whatsapp_link = $request->input("whatsapp_link");
        $articles->date = strval(verta()->now()->format('Y-m-d'));
        $articles->time = strval(verta()->now()->format('H:i:s'));

        $articles->save();
        return redirect(route("admin.articles"))->with(["msg" => "مقاله جدید با موفقیت ایجاد شد"]);
    }

    public function articles_edit($id)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $articles = article::where("id", $id)->first();
        if ($articles != null) {
            return view("admin.article.articles_edit", compact("articles"));
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function articles_edit_submit($id, adminAddArticle $request)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $articles = article::where("id", $id);
        if ($request->input("title") != $articles->first()->title) {
            $articles->update(["title" => $request->input("title")]);
            $articles->update(["slug" => makeSlug(new article(), "slug", $request->input("title")),]);
        }
        $articles->tags = $request->input("tags");
        $status = "active";
        if ($request->input("status") == "2") {
            $status = "deactivate";
        }
        $articleCategory = "news";
        if ($request->input("articleCategory") == "2") {
            $articleCategory = "tutorial";
        }
        if (($itemFile = $request->file('file')) != null) {
            if (File::exists(public_path($articles->first()->img_link))) {
                File::delete(public_path($articles->first()->img_link));
            }
            $nameItem = randomStr(60) . '.' . $itemFile->getClientOriginalExtension();
            $itemFile->move(public_path('/userAssets/img'), $nameItem);
            $articles->update(["img_link" => "/userAssets/img/" . $nameItem]);
        }
        if (($itemFile = $request->file('file_poster')) != null) {
            if (File::exists(public_path($articles->first()->img_link))) {
                File::delete(public_path($articles->first()->img_link));
            }
            $nameItem = randomStr(60) . '.' . $itemFile->getClientOriginalExtension();
            $itemFile->move(public_path('/userAssets/img'), $nameItem);
            $articles->update(["poster" => "/userAssets/img/" . $nameItem]);
        }

        if ($articles->first() != null) {
            $articles->update([
                "content" => $request->input("content"),
                "status" => $status,
                "tags" => $request->input("tags"),
                "article_category" => $articleCategory,
                'instagram_link' => $request->input("instagram_link"),
                'whatsapp_link' => $request->input("whatsapp_link"),
            ]);
            return redirect(route("admin.articles"))->with(["msg" => "مقاله " . $id . " با موفقیت ویرایش یافت"]);
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }


    public function articles_delete(Request $request)
    {
        $id = $request->get("id");
        if (isValidValue($id) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $articles = article::where("id", $id);
        if ($articles->first() != null) {
            $articles->delete();
            return redirect(route("admin.articles"))->with(["msg" => " مقاله شماره " . $id . " با موفقیت حدف شد"]);
        } else {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
    }

    public function articles_multiple_delete(Request $request)
    {
        $ids = json_decode($request->input("listItems"));
        foreach ($ids as $id) {
            $articles = article::where("id", $id);
            if ($articles->first() != null) {
                $articles->delete();
            }
        }
        return redirect(route("admin.articles"))->with(["msg" => "مقالات با موفقیت حذف شدند"]);
    }

///////////////////////////////////////////////////////////
/////////// End article


/////////// Start Comment
///////////////////////////////////////////////////////////


    public function comments(Request $request)
    {
        $searchValue = $request->get("searchValue");
        if (isValidValue($searchValue)) {
            session(["searchValue" => $searchValue]);
            $comments = comment::where(
                function ($query) use ($searchValue) {
                    $query->orWhere("id", $searchValue)
                        ->orWhere("title", "LIKE", "%" . $searchValue . "%");
                }
            )->get();
        } else {
            session()->forget("searchValue");
            $comments = comment::all();
        }
        $pageItems = getPageItems($comments, $request->get("page"));
        $comments = $pageItems["items"];
        $allPages = $pageItems["allPages"];
        $num = $pageItems["currentPage"];
        return view("admin.comment.comments", compact("comments", "allPages", "num"));
    }



///////////////////////////////////////////////////////////
/////////// End Comment


/////////// Start Notice
///////////////////////////////////////////////////////////


    public function notices(Request $request)
    {
        $searchValue = $request->get("searchValue");
        if (isValidValue($searchValue)) {
            session(["searchValue" => $searchValue]);
            $notices = notice::where(
                function ($query) use ($searchValue) {
                    $query->orWhere("id", $searchValue)
                        ->orWhere("title", "LIKE", "%" . $searchValue . "%");
                }
            )->orderBy('productCategory_id', 'ASC')->get();
        } else {
            session()->forget("searchValue");
            $notices = notice::orderBy('productCategory_id', 'ASC')->get();
        }
        $pageItems = getPageItems($notices, $request->get("page"));
        $notices = $pageItems["items"];
        $allPages = $pageItems["allPages"];
        $num = $pageItems["currentPage"];
        return view("admin.notice.notices", compact("notices", "allPages", "num"));
    }

    public function notices_add()
    {
        return view("admin.notice.notices_add");
    }

    public function notices_add_submit(adminAddNotice $request)
    {
        $notices = new notice();
        $notices->title = $request->input("title");
        $notices->content = $request->input("content");
        $notices->productCategory_id = $request->input("product_categories");
        $notices->status = "active";
        if ($request->input("status") == "2") {
            $notices->status = "deactivate";
        }

        $notices->date = strval(verta()->now()->format('Y-m-d'));
        $notices->time = strval(verta()->now()->format('H:i:s'));

        $notices->save();
        return redirect(route("admin.notices"))->with(["msg" => "اطلاعیه جدید با موفقیت ایجاد شد"]);
    }

    public function notices_edit($id)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $notices = notice::where("id", $id)->first();
        if ($notices != null) {
            return view("admin.notice.notices_edit", compact("notices"));
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function notices_edit_submit($id, adminAddNotice $request)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $notices = notice::where("id", $id);
        $status = "active";
        if ($request->input("status") == "2") {
            $status = "deactivate";
        }
        if ($notices->first() != null) {
            $notices->update([
                "title" => $request->input("title"),
                "content" => $request->input("content"),
                "status" => $status,
                'productCategory_id' => $request->input("product_categories"),
            ]);

            return redirect(route("admin.notices"))->with(["msg" => "اطلاعیه " . $id . " با موفقیت ویرایش یافت"]);
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }


    public function notices_delete(Request $request)
    {
        $id = $request->get("id");
        if (isValidValue($id) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $notices = notice::where("id", $id);
        if ($notices->first() != null) {
            $notices->delete();
            return redirect(route("admin.notices"))->with(["msg" => " اطلاعیه شماره " . $id . " با موفقیت حدف شد"]);
        } else {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
    }

    public function notices_multiple_delete(Request $request)
    {
        $ids = json_decode($request->input("listItems"));
        foreach ($ids as $id) {
            $notices = notice::where("id", $id);
            if ($notices->first() != null) {
                $notices->delete();
            }
        }
        return redirect(route("admin.notices"))->with(["msg" => "اطلاعیه ها با موفقیت حذف شدند"]);
    }

///////////////////////////////////////////////////////////
/////////// End Notice

/////////// Start Most Asked Questions
///////////////////////////////////////////////////////////


    public function most_asked_questions(Request $request)
    {
        $searchValue = $request->get("searchValue");
        if (isValidValue($searchValue)) {
            session(["searchValue" => $searchValue]);
            $most_asked_questions = most_asked_question::where(
                function ($query) use ($searchValue) {
                    $query->orWhere("id", $searchValue)
                        ->orWhere("title", "LIKE", "%" . $searchValue . "%");
                }
            )->get();
        } else {
            session()->forget("searchValue");
            $most_asked_questions = most_asked_question::all();
        }
        $pageItems = getPageItems($most_asked_questions, $request->get("page"));
        $most_asked_questions = $pageItems["items"];
        $allPages = $pageItems["allPages"];
        $num = $pageItems["currentPage"];
        return view("admin.mostAskedQuestions.mostAskedQuestions", compact("most_asked_questions", "allPages", "num"));
    }

    public function most_asked_questions_add()
    {
        return view("admin.mostAskedQuestions.mostAskedQuestions_add");
    }

    public function most_asked_questions_add_submit(adminAddMostAskedQuestions $request)
    {
        $most_asked_questions = new most_asked_question();
        $most_asked_questions->title = $request->input("title");
        $most_asked_questions->content = $request->input("content");
        $most_asked_questions->status = "active";
        if ($request->input("status") == "2") {
            $most_asked_questions->status = "deactivate";
        }

        $most_asked_questions->date = strval(verta()->now()->format('Y-m-d'));
        $most_asked_questions->time = strval(verta()->now()->format('H:i:s'));

        $most_asked_questions->save();
        return redirect(route("admin.most_asked_questions"))->with(["msg" => "سوال جدید با موفقیت ایجاد شد"]);
    }

    public function most_asked_questions_edit($id)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $most_asked_questions = most_asked_question::where("id", $id)->first();
        if ($most_asked_questions != null) {
            return view("admin.mostAskedQuestions.mostAskedQuestions_edit", compact("most_asked_questions"));
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function most_asked_questions_edit_submit($id, adminAddMostAskedQuestions $request)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $most_asked_questions = most_asked_question::where("id", $id);
        $status = "active";
        if ($request->input("status") == "2") {
            $status = "deactivate";
        }
        if ($most_asked_questions->first() != null) {
            $most_asked_questions->update([
                "title" => $request->input("title"),
                "content" => $request->input("content"),
                "status" => $status,
            ]);
            return redirect(route("admin.most_asked_questions"))->with(["msg" => "سوال " . $id . " با موفقیت ویرایش یافت"]);
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function most_asked_questions_delete(Request $request)
    {
        $id = $request->get("id");
        if (isValidValue($id) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $most_asked_questions = most_asked_question::where("id", $id);
        if ($most_asked_questions->first() != null) {
            $most_asked_questions->delete();
            return redirect(route("admin.most_asked_questions"))->with(["msg" => " سوال شماره " . $id . " با موفقیت حدف شد"]);
        } else {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
    }

    public function most_asked_questions_multiple_delete(Request $request)
    {
        $ids = json_decode($request->input("listItems"));
        foreach ($ids as $id) {
            $most_asked_questions = most_asked_question::where("id", $id);
            if ($most_asked_questions->first() != null) {
                $most_asked_questions->delete();
            }
        }
        return redirect(route("admin.most_asked_questions"))->with(["msg" => "سوالات با موفقیت حذف شدند"]);
    }


/////////// End Most Asked Questions
/////// start Menu Management
///////////////////////////////////////////////////////////


    public function menuManagement(Request $request)
    {
        $searchValue = $request->get("searchValue");
        if (isValidValue($searchValue)) {
            session(["searchValue" => $searchValue]);
            $navLinks = navLink::where(
                function ($query) use ($searchValue) {
                    $query->orWhere("id", $searchValue)
                        ->orWhere("title", "LIKE", "%" . $searchValue . "%");
                }
            )->get();
        } else {
            session()->forget("searchValue");
            $navLinks = navLink::all();
        }
        $pageItems = getPageItems($navLinks, $request->get("page"));
        $items = $pageItems["items"];
        $allPages = $pageItems["allPages"];
        $num = $pageItems["currentPage"];
        return view("admin.menuManagement.menuManagement", compact("items", "allPages", "num"));
    }

    public function menuManagement_add()
    {
        return view("admin.menuManagement.menuManagement_add");
    }

    public function menuManagement_add_submit(adminMenuManagement $request)
    {
        $navLinks = new navLink();
        $index_number = $request->input("indexNumber");
//        if(navLink::where("index_num", $index_number)->first() != null ){
//            return back()->withErrors(["شماره ردیف تکراری می باشد"]);
//        }
        if (is_numeric($index_number) != true) {
            return back()->withErrors(["فرمت وارد شده نادرست می باشد"]);
        }
        $navLinks->index_num = $request->input("indexNumber");
        if ($request->input("navType") == "1") {
            $navType = "header_nav";
        } elseif ($request->input("navType") == "2") {
            $navType = "footer_nav";
        }
        $navLinks->nav_type = $navType;
        $navLinks->name = $request->input("name");
        $navLinks->link = $request->input("link");
        $navLinks->save();
        return redirect(route("admin.menuManagement"))->with(["msg" => "ایتم جدید با موفقیت ایجاد شد"]);
    }

    public function menuManagement_edit($id)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $item = navLink::where("id", $id)->first();
        if ($item != null) {
            return view("admin.menuManagement.menuManagement_edit", compact("item"));
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function menuManagement_edit_submit($id, adminMenuManagement $request)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $index_number = $request->input("indexNumber");
        if (navLink::where("index_num", $index_number)->first() != null) {
            return back()->withErrors(["شماره ردیف تکراری می باشد"]);
        }
        $index_number = $request->input("indexNumber");
        if (is_numeric($index_number) != true) {
            return back()->withErrors(["فرمت وارد شده نادرست می باشد"]);
        }
        $navLinks = navLink::where("id", $id);
        if ($navLinks->first() != null) {
            if ($request->input("navType") == "1") {
                $navType = "header_nav";
            } elseif ($request->input("navType") == "2") {
                $navType = "footer_nav";
            }
            $navLinks->update([
                "index_num" => $request->input("indexNumber"),
                "name" => $request->input("name"),
                "link" => $request->input("link"),
                "nav_type" => $navType,
            ]);
            return redirect(route("admin.menuManagement"))->with(["msg" => "ایتم " . $id . " با موفقیت ویرایش یافت"]);
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function menuManagement_delete(Request $request)
    {
        $id = $request->get("id");
        if (isValidValue($id) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $navLinks = navLink::where("id", $id);
        if ($navLinks->first() != null) {
            $navLinks->delete();
            return redirect(route("admin.menuManagement"))->with(["msg" => " ایتم شماره " . $id . " با موفقیت حدف شد"]);
        } else {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
    }

    public function menuManagement_multiple_delete(Request $request)
    {
        $ids = json_decode($request->input("listItems"));
        foreach ($ids as $id) {
            $navLinks = navLink::where("id", $id);
            if ($navLinks->first() != null) {
                $navLinks->delete();
            }
        }
        return redirect(route("admin.menuManagement"))->with(["msg" => "ایتم ها با موفقیت حذف شدند"]);
    }

///////////////////////////////////////////////////////////
///////// end Menu Management


///////// end generalInfo
///////////////////////////////////////////////////////////

    public function generalInfo_edit()
    {
        $generalInfos = [];
        foreach (generalInfo::all() as $generalInfo) {
            $generalInfos += [$generalInfo->name => $generalInfo->content];
        }
        return view('admin.generalInfo.admin_generalInfo_edit', compact('generalInfos'));
    }

    public function generalInfo_edit_submit(Request $request)
    {
        $inputs = $request->input();
        foreach ($inputs as $inputKey => $inputValue) {
            if (str_contains($inputKey, 'text#')) {
                $key = explode('text#', $inputKey)[1];
                $info = generalInfo::where('name', $key);
                if ($info->first() != null) {
                    $info->update(['content' => $request->input($inputKey)]);
                } else {
                    $generalInfoModel = new generalInfo();
                    $generalInfoModel->name = $key;
                    $generalInfoModel->content = $request->input($inputKey);
                    $generalInfoModel->save();
                }
            }
        }
        $fileInputs = $request->files;
        foreach ($fileInputs as $inputKey => $inputValue) {
            if (($itemFile = $request->file($inputKey)) != null) {
                $key = explode('file#', $inputKey)[1];
                $info = generalInfo::where('name', $key);
                if ($info->first() != null) {
                    if (File::exists(public_path($info->first()->content))) {
                        File::delete(public_path($info->first()->content));
                    }
                    $nameItem = randomStr(60) . '.' . $itemFile->getClientOriginalExtension();
                    $itemFile->move(public_path('/uploads'), $nameItem);
                    $info->update(['content' => "/uploads/" . $nameItem]);
                } else {
                    $nameItem = randomStr(60) . '.' . $itemFile->getClientOriginalExtension();
                    $itemFile->move(public_path('/uploads'), $nameItem);
                    $generalInfoModel = new generalInfo();
                    $generalInfoModel->name = $key;
                    $generalInfoModel->content = "/uploads/" . $nameItem;
                    $generalInfoModel->save();
                }
            }
        }
        ///////////////////////
        return back()->with(['msg' => 'تنظیمات عمومی با موفقیت ویرایش یافت']);
    }


///////////////////////////////////////////////////////////
///////// end generalInfo


/////// start point
///////////////////////////////////////////////////////////


    public function points(Request $request)
    {
        $searchValue = $request->get("searchValue");
        if (isValidValue($searchValue)) {
            session(["searchValue" => $searchValue]);
            $points = point::where(
                function ($query) use ($searchValue) {
                    $query->orWhere("id", $searchValue);
                }
            )->orderBy('min_amount', 'ASC')->get();
        } else {
            session()->forget("searchValue");
            $points = point::orderBy('min_amount', 'ASC')->get();
        }
        $pageItems = getPageItems($points, $request->get("page"));
        $items = $pageItems["items"];
        $allPages = $pageItems["allPages"];
        $num = $pageItems["currentPage"];
        return view("admin.points.points", compact("items", "allPages", "num"));
    }

    public function points_add()
    {
        return view("admin.points.points_add");
    }

    public function points_add_submit(adminAddPoints $request)
    {
        $min_amount=intval($request->input("min_amount"));
        $max_amount=intval($request->input("max_amount"));
        if($min_amount>$max_amount){
            return back()->withErrors("بازده قیمت سفارش به درستی وارد نشده است");
        }
        $points=point::all();
        foreach ($points as $point){
            if(intval($point->min_amount) == $min_amount and intval($point->max_amount)==$max_amount){
                return back()->withErrors("بازده قیمت سفارش به درستی وارد نشده است");
            }
            else if(intval($point->min_amount) < $min_amount and intval($point->max_amount)>$min_amount){
                return back()->withErrors("بازده قیمت سفارش به درستی وارد نشده است");
            }elseif (intval($point->min_amount) < $max_amount and intval($point->max_amount) > $max_amount){
                return back()->withErrors("بازده قیمت سفارش به درستی وارد نشده است");
            }
        }
        $point=new point();
        $point->min_amount=$min_amount;
        $point->max_amount=$max_amount;
        $point->point=$request->input("point");
        $point->save();
        return redirect(route("admin.points"))->with(["msg" => "امتیاز جدید با موفقیت ایجاد شد"]);
    }

    public function points_edit($id)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $item = point::where("id", $id)->first();
        if ($item != null) {
            return view("admin.points.points_edit", compact("item"));
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function points_edit_submit($id,adminAddPoints $request)
    {
        if (isValidValue($id) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }

        $pointModal = point::where("id", $id);
        if ($pointModal->first() != null) {
            $min_amount=intval($request->input("min_amount"));
            $max_amount=intval($request->input("max_amount"));
            if($min_amount>$max_amount){
                return back()->withErrors("بازده قیمت سفارش به درستی وارد نشده است");
            }
            $points=point::where("id","!=", $id)->get();
            foreach ($points as $point){
                if(intval($point->min_amount) == $min_amount and intval($point->max_amount)==$max_amount){
                    return back()->withErrors("بازده قیمت سفارش به درستی وارد نشده است");
                }
                else if(intval($point->min_amount) < $min_amount and intval($point->max_amount)>$min_amount){
                    return back()->withErrors("بازده قیمت سفارش به درستی وارد نشده است");
                }elseif (intval($point->min_amount) < $max_amount and intval($point->max_amount) > $max_amount){
                    return back()->withErrors("بازده قیمت سفارش به درستی وارد نشده است");
                }
            }
            $pointModal->update([
                "min_amount" => $min_amount,
                "max_amount" => $max_amount,
                "point" => $request->input("point"),
            ]);
            return redirect(route("admin.points"))->with(["msg" => "امتیاز " . $id . " با موفقیت ویرایش یافت"]);
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function points_delete(Request $request)
    {
        $id = $request->get("id");
        if (isValidValue($id) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $point = point::where("id", $id);
        if ($point->first() != null) {
            $point->delete();
            return redirect(route("admin.points"))->with(["msg" => " امتیاز شماره " . $id . " با موفقیت حدف شد"]);
        } else {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
    }

    public function points_multiple_delete(Request $request)
    {
        $ids = json_decode($request->input("listItems"));
        foreach ($ids as $id) {
            $point = point::where("id", $id);
            if ($point->first() != null) {
                $point->delete();
            }
        }
        return redirect(route("admin.points"))->with(["msg" => "امتیاز ها با موفقیت حذف شدند"]);
    }

///////// end point



}






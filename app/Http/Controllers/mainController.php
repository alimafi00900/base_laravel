<?php

namespace App\Http\Controllers;

use App\Http\Middleware\hasUserId;
use App\Models\Training;
use App\Models\User;
use Illuminate\Contracts\Auth\Middleware\AuthenticatesRequests;
use Illuminate\Http\Request;
use App\Http\Helpers\jsonStorage;
use App\Models\product_category;
use App\Models\article;
use App\Models\products;
use App\Models\order;
use App\Models\payment;
use App\Models\notice;
use App\Models\point;
use App\Models\user_log;
use App\Models\comment;
use App\Models\branch;
use App\Models\most_asked_question;
use App\Models\media;
use App\Models\navLink;
use App\Models\adminUser;
use App\Models\user_point_history;
use App\Models\walletTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Requests\userLoginReq;
use App\Http\Requests\userRegisterReq;
use App\Http\Requests\userUpdateInfos;
use App\Http\Helpers\TextToImage;


class mainController extends Controller
{
    private $merchant_id = '89f8b93e-968f-11ea-b548-000c295eb8fc';

    public function test()
    {

        dd(session()->all());
    }

    public static function update_user_points($order)
    {
        $pointModel = point::where("min_amount", "<=", getProperty($order, "amount"))->where("max_amount", ">=", getProperty($order, "amount"))->first();
        $point = getProperty($pointModel, "point");
        if ($pointModel != null and $point != null) {
            User::where("ID", Auth::user()->ID)->update(["basic_point" => intval(Auth::user()->basic_point) + intval($point)]);
            $user_point_history = new user_point_history();
            $user_point_history->user_id = Auth::user()->ID;
            $user_point_history->order_id = getProperty($order, "id");
            $user_point_history->operator = "+";
            $user_point_history->point_amount = $point;
            $user_point_history->purpose = "سفارش " . getProperty($order, "id") . " با قیمت " . number_format(getProperty($order, "amount")) . " تومان ";
            $user_point_history->date = strval(verta()->now()->format('Y-m-d'));
            $user_point_history->time = strval(verta()->now()->format('H:i:s'));
            $user_point_history->save();
        }

    }

    ///////////////// api

    public function api_login(userLoginReq $request)
    {
        $security_code = $request->input("security_code");
        if (isValidValue($security_code) != true or $security_code != session()->get('security_code')) {
            return response(['errMsg' => 'کد امنیتی به درستی وارد نشده است']);
        }
        ///////////////
        $user_verify = session()->get("user_verify");
        if (isValidValue($user_verify) == true and (getProperty($user_verify, ['get_code']) <= 0 or getProperty($user_verify, ['verify_code']) <= 0)) {
            return response(['errMsg' => 'به دلایل امنیتی دسترسی شما محدود شده است ']);
        }
        ///////////////
        $phoneNumber = phoneNumberWithOutZero($request->input("phoneNumber"));
        if (validatePhoneNumber($phoneNumber) != true) {
            return response(['errMsg' => "شماره همراه به درستی وارد نشده است"]);
        }
        $user = User::where("user_login", $phoneNumber)->first();
        if ($user == null) {
            return response(['errMsg' => 'حسابی با این شماره همراه یافت نشد']);
        }
        if ($user->password != Hash::make($phoneNumber)) {
            User::where("user_login", $phoneNumber)->update(['password' => Hash::make($phoneNumber)]);
        }
        $code = rand(11111, 99999);
        if (session()->has("user_verify") != true) {
            sessionUpdate(['user_verify' => [
                'phoneNumber' => $phoneNumber,
                'code' => $code,
                'get_code' => 3,
                'verify_code' => 3,
                'rememberMe' => $request->input('rememberMe')
            ]]);
        }
        sendSms(phoneNumberWithZero($phoneNumber), 'CODE', $code);
        return response(['success' => 0]);
    }

    public function api_like_submit(Request $request)
    {
        $id = $request->get('id');
        $article = article::where("id", $id);
        if ($article->first() != null) {
            $isLiked = true;
            $likes = (array)json_decode($article->first()->likes);
            if (in_array(strval(Auth::user()->ID), $likes)) {
                removeFromArray($likes, strval(Auth::user()->ID));
                $isLiked = false;
            } else {
                $isLiked = true;
                appendToArray($likes, strval(Auth::user()->ID));
            }
            $article->update(['likes' => $likes]);
            return response(['success' => 0, 'likesCount' => count($likes), 'isLiked' => $isLiked]);
        } else {
            return response(['errMsg' => 'خطایی رخ داده است']);
        }
    }

    public function api_mark_submit(Request $request)
    {
        $id = $request->get('id');
        $article = article::where("id", $id);
        if ($article->first() != null) {
            $isMarked = true;
            $marks = (array)json_decode($article->first()->marks);
            if (in_array(strval(Auth::user()->ID), $marks)) {
                removeFromArray($marks, strval(Auth::user()->ID));
                $isMarked = false;
            } else {
                $isMarked = true;
                appendToArray($marks, strval(Auth::user()->ID));
            }
            $article->update(['marks' => $marks]);
            return response(['success' => 0, 'isMarked' => $isMarked]);
        } else {
            return response(['errMsg' => 'خطایی رخ داده است']);
        }
    }

    public function api_register(userRegisterReq $request)
    {
        $security_code = $request->input("security_code");
        if (isValidValue($security_code) != true or $security_code != session()->get('security_code')) {
            return response(['errMsg' => 'کد امنیتی به درستی وارد نشده است']);
        }
        ///////////////
        $user_verify = session()->get("user_verify");
        if (isValidValue($user_verify) == true and (getProperty($user_verify, ['get_code']) <= 0 or getProperty($user_verify, ['verify_code']) <= 0)) {
            return response(['errMsg' => 'به دلایل امنیتی دسترسی شما محدود شده است ']);
        }
        ///////////////
        $name = $request->input("name");
        $phoneNumber = phoneNumberWithOutZero($request->input("phoneNumber"));
        if (validatePhoneNumber($phoneNumber) != true) {
            return response(['errMsg' => 'به دلایل امنیتی دسترسی شما محدود شده است ']);
        }
        $user = User::where("user_login", $phoneNumber)->first();
        if ($user != null) {
            return response(['errMsg' => 'حسابی بااین شماره همراه وجود دارد']);
        }
        $user = new User();
        $user->status = 'active';
        $user->user_login = $phoneNumber;
        $user->user_nicename = $phoneNumber;
        $user->display_name = $name;
        $user->password = Hash::make($phoneNumber);
        $user->user_registered = strval(verta()->now()->format('Y-m-d H:i:s'));
        $user->save();
        $code = rand(11111, 99999);
        if (session()->has("user_verify") != true) {
            sessionUpdate(['user_verify' => [
                'phoneNumber' => $phoneNumber,
                'code' => $code,
                'get_code' => 3,
                'verify_code' => 3,
                'rememberMe' => $request->input('rememberMe')
            ]]);
        }
        sendSms(phoneNumberWithZero($phoneNumber), 'CODE', $code);
        return response(['success' => 0]);

    }

    public function api_get_code()
    {
        ///////////////
        $user_verify = session()->get("user_verify");
        if (isValidValue($user_verify) == true and (getProperty($user_verify, ['get_code']) <= 0 or getProperty($user_verify, ['verify_code']) <= 0)) {
            return response(['errMsg' => 'به دلایل امنیتی دسترسی شما محدود شده است ']);
        }
        ///////////////
        $phoneNumber = getProperty($user_verify, ['phoneNumber']);
        $code = rand(11111, 99999);
        sessionUpdate(['user_verify' => ['get_code' => getProperty($user_verify, ['get_code']) - 1]]);
        sessionUpdate(['user_verify' => ['code' => $code]]);
        sendSms(phoneNumberWithZero($phoneNumber), 'CODE', $code);
        return response(['msg' => 'کد با موفقت ارسال شد']);
    }

    public function api_verify_code(Request $request)
    {
        ///////////////
        $user_verify = session()->get("user_verify");
        if (isValidValue($user_verify) == true and (getProperty($user_verify, ['get_code']) <= 0 or getProperty($user_verify, ['verify_code']) <= 0)) {
            return response(['errMsg' => 'به دلایل امنیتی دسترسی شما محدود شده است ']);
        }
        ///////////////
        $code = $request->input("code");
        if (isValidValue($code, true) != true) {
            return response(['errMsg' => "کد به درستی وارد نشده است"]);
        }
        if ($code != getProperty($user_verify, ['code'])) {
            sessionUpdate(['user_verify' => ['verify_code' => (getProperty($user_verify, ['verify_code']) - 1)]]);
            return response(['errMsg' => "کد به درستی وارد نشده است"]);
        }
        if (authAttempt(getProperty($user_verify, 'phoneNumber'), getProperty($user_verify, 'phoneNumber'), getProperty($user_verify, ['rememberMe']))) {
            session()->forget('user_verify');
            return response(['success' => 0]);
        } else {
            session()->forget('user_verify');
            return response(['errMsg' => "خطایی رخ داده است"]);
        }
    }

    public function api_get_security_code_pic()
    {
        $textToImage = new TextToImage();
        $security_code = strval(rand(11111, 99999));
        $textToImage->createImage($security_code);
        sessionUpdate(['security_code' => $security_code]);
        return $textToImage->showImage();
    }

    public function api_change_dark_mood(Request $request)
    {
        if ($request->get('status') == 'enable') {
            sessionUpdate(['dark_mood' => true]);
        } elseif ($request->get('status') == 'disable') {
            sessionUpdate(['dark_mood' => false]);
        }
        return response([]);
    }


    ////////////////// end api
    public function logout()
    {
        authLogout();
        return redirect(route('user.index'));
    }

    public function index()
    {
        return view("user.index");
    }

    public function statute()
    {
        return view("user.statute");
    }

    public function about_us()
    {
        return view("user.aboutUs");
    }

    public function comment_submit(Request $request)
    {
        $section = $request->input("s");
        $post_id = $request->input("pi");
        $name = $request->input("name");
        $phone_number = $request->input("phone_number");
        $content = $request->input("content");
        if (isValidValue($section) != true or isValidValue($post_id) != true or isValidValue($content) != true) {
            return back()->withErrors("خطایی رخ داده است");
        }
        $comment = new comment();
        if (Auth::check()) {
            $comment->user_id = Auth::user()->ID;
            $comment->user_type = "user";
        } else {
            if (isValidValue($name) != true or isValidValue($phone_number) != true) {
                return back()->withErrors("نام یا شماره همراه به درستی وارد نشده است");
            }
            $comment->fullName = $name;
            $comment->phone_number = $phone_number;
            $comment->user_type = "guest";
        }
        $comment->content = $content;
        $comment->status = "deactivate";
        $comment->section = $section;
        $comment->post_id = $post_id;
        $comment->date = strval(verta()->now()->format('Y-m-d'));
        $comment->time = strval(verta()->now()->format('H:i:s'));
        $comment->save();
        return back()->with(["msg" => "دیدگاه شما با موفقیت ارسال شد"]);
    }

    public function most_asked_questions()
    {
        return view("user.mostAskedQuestions");
    }

    public function contact_us()
    {
        return view("user.contactUs");
    }

    public function news()
    {
        $news = article::where("article_category", "news")->where('status', 'active')->orderBy('created_at', 'desc')->paginate(6);
        return view("user.newsCategory", compact("news"));
    }

    public function single_news($slug)
    {
        if (isValidValue($slug) != true) {
            return redirect(route("user.index"))->withErrors("خطای ۴۰۴ صفحه مورد نظر یافت نشد");
        }
        $news = article::where("slug", $slug)->where('status', 'active')->first();
        if ($news != null) {
            $relatedNews = article::where("article_category", "news")->where('id', '!=', $news->id)->orWhere(
                function ($query) use ($news) {
                    $tags = strToArray($news->tags);
                    foreach ($tags as $tag) {
                        $query->orWhere('tags', "LIKE", '%' . $tag . '%');
                    }
                })->where('status', 'active')->orderBy('created_at', 'desc')->get()->take(7);
            return view("user.singleNews", compact('news', 'relatedNews'));
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function articles()
    {
        $articles = article::where("article_category", "tutorial")->where('status', 'active')->orderBy('created_at', 'desc')->paginate(16);
        return view("user.articleCategory", compact("articles"));
    }

    public function single_article($slug)
    {
        if (isValidValue($slug) != true) {
            return redirect(route("user.index"))->withErrors("خطای ۴۰۴ صفحه مورد نظر یافت نشد");
        }
        $article = article::where("slug", $slug)->where('status', 'active')->first();
        if ($article != null) {
            return view("user.singleArticle", compact('article'));
        } else {
            return back()->withErrors("خطایی رخ داده است");
        }
    }

    public function single_product_category($slug)
    {
        if (isValidValue($slug) != true) {
            return redirect(route("user.index"))->withErrors("خطای ۴۰۴ صفحه مورد نظر یافت نشد");
        }
        $productCategory = product_category::orWhere("slug", $slug)->orWhere('id', $slug)->first();
        if ($productCategory != null) {
            $products = products::where("productCategory_id", $productCategory->id)->orderBy('status', 'ASC')->get();
            $productsJson = [];
            foreach ($products as $product) {
                $stock_count = $product->stock_count;
                if (is_numeric($stock_count) and $stock_count > 10) {
                    $stock_count = null;
                }
                $status = $product->status;
                if (getProperty($productCategory, 'status') != "active") {
                    $status = 'deactivate';
                }
                updateProperty($productsJson, [$product->id => [
                    "title" => $product->title,
                    "price" => $product->price,
                    'type' => $product->product_type,
                    'stock_count' => $stock_count,
                    "status" => $status,
                ]]);
            }
            $forms = json_decode($productCategory->forms);
            return view("user.productCategory", compact("productCategory", "products", "forms", 'productsJson'));
        } else {
            return redirect(route("user.index"))->withErrors("خطای ۴۰۴ صفحه مورد نظر یافت نشد");
        }

    }

    public function single_branch($slug)
    {
        if (isValidValue($slug) != true) {
            return redirect(route("user.index"))->withErrors("خطای ۴۰۴ صفحه مورد نظر یافت نشد");
        }
        $branch = branch::orWhere("name", $slug)->orWhere('id', $slug)->first();
        if ($branch != null) {
            $product_categories = product_category::where("branches", $branch->id)->orderBy('status', 'ASC')->get();
            return view("user.singleBranch", compact("branch", "product_categories"));
        } else {
            return redirect(route("user.index"))->withErrors("خطای ۴۰۴ صفحه مورد نظر یافت نشد");
        }

    }


    /////////
    public function order_submit($categoryId, Request $request)
    {
        $category = product_category::where("id", $categoryId)->where("status", "active")->first();
        if ($category != null) {
            ///////////////////
            $orderItems = $request->input("item_orders");
            if (isValidValue($orderItems) != true or json_decode($orderItems) == null or count((array)json_decode($orderItems)) == 0) {
                return back()->withErrors("سبد خرید شما خالی است");
            }
            /////////////////
            $formName = $request->input("form_key");
            $form = getProperty(json_decode(getProperty($category, 'forms')), $formName);
            if ($form == null) {
                return back()->withErrors("خطایی رخ داده است");
            }
            /////////////////////////
            $formFields = getProperty($form, ["form_fields"]);
            if ($formFields == null) {
                return back()->withErrors("خطایی رخ داده است");
            }
            //////////////////////
            foreach ($formFields as $formFieldKey => $formFieldValue) {
                $field = getProperty($formFields, $formFieldKey);
                $fieldValue = $request->input($formName . "_" . $formFieldKey);
                if (getProperty($field, "field_required") == true) {
                    if (isValidValue($fieldValue) != true) {
                        return back()->withErrors("" . getProperty($field, "field_title") . " به درستی وارد نشده است ");
                    }
                }
                if (isValidValue($fieldValue)) {
                    $field_condition = getProperty($field, "field_condition");
                    if ($field_condition == "email") {
                        if (validateEmail($fieldValue) != true) {
                            return back()->withErrors("" . getProperty($field, "field_title") . " به درستی وارد نشده است ");
                        }
                    } elseif ($field_condition == "number") {
                        if (is_numeric($fieldValue) != true) {
                            return back()->withErrors("" . getProperty($field, "field_title") . " به درستی وارد نشده است ");
                        }
                    }
                    ///////////////
                    if (isValidValue(getProperty($field, "field_min_chars"))) {
                        if (strlen($fieldValue) < intval(getProperty($field, "field_min_chars"))) {
                            return back()->withErrors(" طول " . getProperty($field, "field_title") . " کمتر از حد مجاز است ");
                        }
                    }
                    if (isValidValue(getProperty($field, "field_max_chars"))) {
                        if (strlen($fieldValue) > intval(getProperty($field, "field_max_chars"))) {
                            return back()->withErrors(" طول " . getProperty($field, "field_title") . " بیشتر از حد مجاز است ");
                        }
                    }
                }
            }
            /////////////////////
            $inputs = [];
            foreach ($formFields as $formFieldKey => $formFieldValue) {
                updateProperty($inputs, [$formFieldKey => ['display_name' => getProperty($formFields, [$formFieldKey, 'field_title']), "value" => $request->input($formName . '_' . $formFieldKey)]]);
            }
            /////////////////////
            $orderItems = json_decode($orderItems);
            $totalAmount = 0;
            $orderItemsTemp = [];
            foreach ($orderItems as $itemKey => $itemValue) {
                $product = products::where("id", $itemKey)->where("status", "active")->first();
                if ($product == null or getProperty($product, 'status') != "active" or getProperty($category, 'status') != "active") {
                    return back()->withErrors("خطایی رخ داده است");
                } else {
                    if ($product->product_type == "physical" and intval(getProperty($itemValue->num)) > intval($product->stock_count)) {
                        return back()->withErrors(' تعداد درخواستی ' . $product->title . ' بیش از حد مجاز است ');
                    }
                    updateProperty($orderItemsTemp, [$itemKey => [
                        'title' => $product->title,
                        'num' => getProperty($itemValue->num),
                        'price' => $product->price,
                        "product_type" => $product->product_type,
                        'productCategory_id' => $product->productCategory_id,
                    ]]);
                    $totalAmount += intval($product->price) * intval(getProperty($itemValue, 'num'));
                }
            }
            $orderItems = $orderItemsTemp;
            ///////////////////////
            $order = new order();
            $order->products = json_encode($orderItems);
            $order->productCategory_id = $category->id;
            $order->branch_id = $category->branches;
            $order->form = json_encode(['form_name' => $formName, 'form_display_name' => getProperty($form, ['form_title'])]);
            $order->fields = json_encode($inputs);
            $order->user_id = Auth::user()->ID;
            $order->user_login = Auth::user()->user_login;
            $order->user_display_name = Auth::user()->display_name;
            $order->amount = $totalAmount;
            $order->ip = $request->ip();
            $order->status = "paying";
            $order->date = strval(verta()->now()->format('Y-m-d'));
            $order->time = strval(verta()->now()->format('H:i:s'));
            $order->save();
            userLog(Auth::user()->ID, "order_log", "سفارش $order->id ایجاد شد", $order->id);
            ///////////////////
            $userBasicBalance = intval(Auth::user()->basic_balance);
            $wallet_payment_amount = 0;
            $online_payment_amount = 0;
            $leftOverAmount = $userBasicBalance - $totalAmount;
            if ($leftOverAmount < 0) {
                $wallet_payment_amount = $userBasicBalance;
                $userBasicBalance = 0;
                $online_payment_amount = $leftOverAmount * (-1);
            } else {
                $userBasicBalance = $leftOverAmount;
                $wallet_payment_amount = $totalAmount;
            }
            if ($online_payment_amount < 1000 and $online_payment_amount != 0) {
                $wallet_payment_amount -= 1000;
                $online_payment_amount += 1000;
            }
            //////////////////////////
            if ($wallet_payment_amount > 0 and $online_payment_amount == 0) {
                $walletTransaction = new walletTransaction();
                $walletTransaction->amount = $wallet_payment_amount;
                $walletTransaction->status = "completed";
                $walletTransaction->user_id = Auth::user()->ID;
                $walletTransaction->order_id = $order->id;
                $walletTransaction->purpose = "order_pay";
                $walletTransaction->operator = "-";
                $walletTransaction->explanation = 'پرداخت سفارش شماره ' . $order->id;
                $walletTransaction->date = strval(verta()->now()->format('Y-m-d'));
                $walletTransaction->time = strval(verta()->now()->format('H:i:s'));
                $walletTransaction->save();
                $user = User::where("ID", $order->user_id)->first();
                $itemsName = '';
                foreach (json_decode(order::where("id", $order->id)->first()->products) as $itemKey => $itemValue) {
                    $itemsName .= getProperty($itemValue, 'title');
                    if (array_key_last((array)$order->products) != $itemKey) {
                        $itemsName .= ' ,';
                    }
                }
                self::update_user_points($order);
                sendSms(phoneNumberWithZero($user->user_login), 'inprogress', $user->user_nicename, $order->id, $itemsName, number_format($order->amount) . ' تومان ');
                User::where("ID", Auth::user()->ID)->update(["basic_balance" => $userBasicBalance]);
                order::where("id", $order->id)->update(["payment_type" => "only_wallet", "wallet_transaction_id" => $walletTransaction->id, 'status' => "paid",]);
                userLog(Auth::user()->ID, "order_log", "پرداخت از کیف پول با موفقیت انجام شد", $order->id);
                return redirect(route("user.single_product_category", [$category->id]))->with(["paymentMsg" => "شماره پیگیری: ".$order->id." پرداخت  از کیف پول شما با موفقیت انجام شد"]);
            }
            ///////////////////
            if ($wallet_payment_amount == 0 and $online_payment_amount > 0) {
                $payment = new payment();
                $payment->order_id = $order->id;
                $payment->ip = $request->ip();
                $payment->productCategory_id = $category->id;
                $payment->user_id = Auth::user()->ID;
                $payment->amount = $online_payment_amount;
                $payment->date = strval(verta()->now()->format('Y-m-d'));
                $payment->time = strval(verta()->now()->format('H:i:s'));
                $payment->status = "request";
                $payment->save();

                order::where("id", $order->id)->update(["payment_type" => "only_online", "payment_id" => $payment->id]);
                /////////////////////////////////////////
                $data = array("merchant_id" => $this->merchant_id,
                    "amount" => $online_payment_amount,
                    "callback_url" => route("user.verify_payment"),
                    "description" => " سفارش شماره " . $order->id,
                    "metadata" => [],
                );
                $jsonData = json_encode($data);
                $ch = curl_init('https://api.zarinpal.com/pg/v4/payment/request.json');
                curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
                curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($jsonData)
                ));
                $result = curl_exec($ch);
                $err = curl_error($ch);
                $result = json_decode($result, true, JSON_PRETTY_PRINT);
                curl_close($ch);
                if ($err) {
                    return redirect(route("user.single_product_category", [$category->slug]))->with(["paymentErrMsg" => "خطایی رخ داده است"]);
                } else {
                    $payment_update = payment::where("id", $payment->id);
                    $payment_update->update(["requestRes" => json_encode($result)]);
                    if (empty($result['errors'])) {
                        if ($result['data']['code'] == 100) {
                            $payment_update->update(["authority" => $result['data']["authority"]]);
                            return redirect('https://www.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);
                        }
                    } else {
                        $payment_update->update(["resCode" => $result['errors']['code'], "errMsg" => $result['errors']['message']]);
                        return redirect(route("user.single_product_category", [$category->slug]))->with(["paymentErrMsg" => " کد خطا: " . $result['errors']['code'] . " " . $result['errors']['message']]);
                    }
                }
            }
            //////////////////
            if ($wallet_payment_amount > 0 and $online_payment_amount > 0) {
                $walletTransaction = new walletTransaction();
                $walletTransaction->amount = $wallet_payment_amount;
                $walletTransaction->status = "paying";
                $walletTransaction->user_id = Auth::user()->ID;
                $walletTransaction->order_id = $order->id;
                $walletTransaction->purpose = "order_pay";
                $walletTransaction->operator = "-";
                $walletTransaction->explanation = 'پرداخت سفارش شماره ' . $order->id;
                $walletTransaction->date = strval(verta()->now()->format('Y-m-d'));
                $walletTransaction->time = strval(verta()->now()->format('H:i:s'));
                $walletTransaction->save();
                ////////////////////////
                $payment = new payment();
                $payment->order_id = $order->id;
                $payment->ip = $request->ip();
                $payment->productCategory_id = $category->id;
                $payment->user_id = Auth::user()->ID;
                $payment->amount = $online_payment_amount;
                $payment->date = strval(verta()->now()->format('Y-m-d'));
                $payment->time = strval(verta()->now()->format('H:i:s'));
                $payment->status = "request";
                $payment->save();
                order::where("id", $order->id)->update(["payment_type" => "wallet_online", "wallet_transaction_id" => $walletTransaction->id, "payment_id" => $payment->id]);
                /////////////////////////////////////////
                $data = array("merchant_id" => $this->merchant_id,
                    "amount" => $online_payment_amount,
                    "callback_url" => route("user.verify_payment"),
                    "description" => " سفارش شماره " . $order->id,
                    "metadata" => [],
                );
                $jsonData = json_encode($data);
                $ch = curl_init('https://api.zarinpal.com/pg/v4/payment/request.json');
                curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
                curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($jsonData)
                ));
                $result = curl_exec($ch);
                $err = curl_error($ch);
                $result = json_decode($result, true, JSON_PRETTY_PRINT);
                curl_close($ch);
                if ($err) {
                    return redirect(route("user.single_product_category", [$category->slug]))->with(["paymentErrMsg" => "خطایی رخ داده است"]);
                } else {
                    $payment_update = payment::where("id", $payment->id);
                    $payment_update->update(["requestRes" => json_encode($result)]);
                    if (empty($result['errors'])) {
                        if (getProperty($result, ['data', 'code']) == 100) {
                            $payment_update->update(["authority" => $result['data']["authority"]]);
                            return redirect('https://www.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);
                        }
                    } else {
                        $payment_update->update(["resCode" => getProperty($result, ['errors', 'code']), "errMsg" => getProperty($result, ['errors', 'message'])]);
                        return redirect(route("user.single_product_category", [$category->slug]))->with(["paymentErrMsg" => " کد خطا: " . getProperty($result, ['errors', 'code']) . " " . getProperty($result, ['errors', 'message'])]);
                    }
                }
            }
            ///////////////
        } else {
            return redirect(route("user.index"))->withErrors("خطایی رخ داده است");
        }

    }

    public
    function verify_payment(Request $request)
    {
        $authority = $request->get("Authority");
        $status = $request->get("Status");
        $payment_report = payment::where("authority", $authority)->first();
        if ($payment_report != null and $status == "OK") {
            $data = array("merchant_id" => $this->merchant_id, "authority" => $payment_report->authority, "amount" => intval($payment_report->amount));
            $jsonData = json_encode($data);
            $ch = curl_init('https://api.zarinpal.com/pg/v4/payment/verify.json');
            curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v4');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData)
            ));
            $result = curl_exec($ch);
            $err = curl_error($ch);
            curl_close($ch);
            $result = json_decode($result, true, JSON_PRETTY_PRINT);
            if ($err) {
                return redirect(route("user.single_product_category", [$payment_report->productCategory_id]))->with(["paymentErrMsg" => "خطایی رخ داده است"]);
            } else {
                $payment_report_update = payment::where("id", $payment_report->id);
                $payment_report_update->update(["verifyRes" => json_encode($result)]);
                if (getProperty($result, ['data', 'code']) == 100) {
                    $payment_report_update->update(["ref_id" => getProperty($result, ['data', 'ref_id']), "status" => "success"]);
                    $order = order::where("id", $payment_report_update->first()->order_id);
                    $order->update([
                        'status' => "paid",
                        'payment_id' => $payment_report_update->first()->id,
                    ]);
                    if ($order->first()->payment_type == "wallet_online") {
                        $userBasicBalance = intval(Auth::user()->basic_balance);
                        $walletTransaction = walletTransaction::where("order_id", $order->first()->id)->where("user_id", Auth::user()->ID);
                        User::where("ID", Auth::user()->ID)->update(["basic_balance" => $userBasicBalance - intval($walletTransaction->first()->amount)]);
                        userLog(Auth::user()->ID, "order_log", "پرداخت از طریق کیف پول و درگاه انلاین شماره مرجع " . getProperty($result, ['data', 'ref_id']) . " موفقیت انجام شد", $order->id);
                        $walletTransaction->update(["status" => "completed"]);
                    }
                    $order->update(['ref_id' => getProperty($result, ['data', 'ref_id'])]);
                    $user = User::where("ID", $order->first()->user_id)->first();
                    $itemsName = '';
                    foreach (json_decode($order->first()->products) as $itemKey => $itemValue) {
                        $itemsName .= getProperty($itemValue, 'title');
                        if (array_key_last((array)$order->first()->products) != $itemKey) {
                            $itemsName .= ' ,';
                        }
                    }
                    self::update_user_points($order->first());
                    sendSms(phoneNumberWithZero($user->user_login), 'inprogress', $user->user_nicename, $order->first()->id, $itemsName, number_format($order->first()->amount) . ' تومان ');
                    userLog(Auth::user()->ID, "order_log", "پرداخت از درگاه انلاین با شماره مرجع " . getProperty($result, ['data', 'ref_id']) . " موفقیت انجام شد", $order->id);
                    return redirect(route("user.single_product_category", [$payment_report->productCategory_id]))->with(["paymentMsg" => "  شماره سفارش:  " . $payment_report_update->first()->order_id . " پرداخت با موفقیت انجام شد  شماره تراکنش : " . getProperty($result, ['data', 'ref_id'])]);
                } else {
                    $payment_report_update->update(["resCode" => getProperty($result, ['errors', 'code']), "errMsg" => getProperty($result, ['errors', 'message']), "status" => "failed"]);
                    return redirect(route("user.single_product_category", [$payment_report->productCategory_id]))->with(["paymentErrMsg" => "  شماره سفارش:  " . $payment_report_update->first()->order_id . " کد خطا:  " . getProperty($result, ['errors', 'code']) . " " . getProperty($result, ['errors', 'message'])]);
                }
            }
        } else {
            return redirect(route("user.single_product_category", [$payment_report->productCategory_id]))->with(["paymentErrMsg" => "پرداخت ناموفق"]);
        }
    }

    ///////////////// user_panel
    public function user_panel()
    {
        $user = User::where("ID", Auth::user()->ID)->first();
        return view("user.panel", compact('user'));
    }

    public function update_user_infos(userUpdateInfos $request)
    {
        if (validatePhoneNumber($request->input("user_login")) != true) {
            return back()->withErrors("شماره همراه به درستی وارد نشده است");
        }
        $user = User::where("ID", Auth::user()->ID);
        $user->update([
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'user_login' => phoneNumberWithOutZero($request->input('user_login')),
            'password' => Hash::make(phoneNumberWithOutZero($request->input('user_login'))),
            'user_email' => $request->input('user_email'),
            'display_name' => $request->input('display_name'),
        ]);
        return redirect(route("user.panel"))->with(['msg' => "اطلاعات کاربری با موفقیت ویرایش یافت"]);
    }

    public function user_panel_comment_delete(Request $request)
    {
        $id = $request->get("id");
        if (is_numeric($id) != true) {
            return back()->withErrors(["خطایی رخ داده است"]);
        }
        $comment = comment::where("id", $id)->where('user_id', Auth::user()->ID);
        if ($comment->first() != null) {
            $comment->update(["status"=>"deactivate"]);
            return back()->with(["msg"=>"کامنت با موفقیت حذف شد"]);
        }
        else{
            return back()->withErrors('خطایی رخ داده است');
        }

    }
}

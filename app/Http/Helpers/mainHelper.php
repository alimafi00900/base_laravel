<?php

function activePage($route, $out = "active")
{
    if (getType($route) == "array") {
        foreach ($route as $value) {
            if (str_contains(\Request::route()->getName(), $value)) {
                return $out;
            }
        }
        return "";

    } else if (getType($route) == "string") {
        if (str_contains(\Request::route()->getName(), $route)) {
            return $out;
        } else {
            return "";
        }
    }
}

function fixUrl($content)
{
    $content = str_replace('../', '', $content);
    $content = str_replace('src="uploads', 'src="' . \Illuminate\Support\Facades\URL::to('/') . '/uploads', $content);
    return $content;
}

function getStatus($key=null)
{
    $out= [
        'paying' => ['display_name' => 'در انتظار پرداخت', 'class' => "btn-light"],
        'paid' => ['display_name' => 'درحال انجام', 'class' => "btn-info"],
        'awaiting_review' => ['display_name' => 'در انتظار بررسی', 'class' => "btn-warning"],
        'completed' => ['display_name' => 'تکمیل شده', 'class' => "btn-success"],
        'canceled' => ['display_name' => 'لغو شده', 'class' => "btn-dark"],
        'returned' => ['display_name' => 'مسترد شده', 'class' => "btn-danger"],
        'unsuccessful' => ['display_name' => 'ناموفق', 'class' => "btn-dark"],
        'timely_order' => ['display_name' => 'سفارش زمان دار', 'class' => "btn-dark"],
        'wallet' => ['display_name' => 'کیف پول', 'class' => "btn-dark"],
        'two_step_verification' => ['display_name' => 'تایید دو مرحله ای', 'class' => "btn-dark"],
        'tournament' => ['display_name' => 'تورنومنت', 'class' => "btn-dark"],
        'pubg_new_state' => ['display_name' => 'پابجی نیو استیت', 'class' => "btn-dark"],
        'impossible_to_do' => ['display_name' => 'غیر قابل انجام', 'class' => "btn-warning"],
        'wrong_information' => ['display_name' => 'اطلاعات اشتباه', 'class' => "btn-dark"],
    ];
    if(isValidValue($key)){
        return getProperty($out,$key);
    }else{
        return $out;
    }
}

function darkMoodStatus()
{
    if (session()->has('dark_mood') and session()->get('dark_mood') == true) {
        return true;
    } elseif (session()->has('dark_mood') and session()->get('dark_mood') == false) {
        return false;
    }
    $hour = intval(verta()->now()->format('H'));
    if (($hour >= 20 and $hour <= 23) or ($hour >= 1 and $hour <= 8)) {
        return true;
    } else {
        return false;
    }
}

function phoneNumberWithZero($str)
{
    if ($str[0] != '0') {
        $str = '0' . $str;
    }
    return $str;
}

function phoneNumberWithOutZero($str)
{
    if ($str[0] == '0') {
        $str = substr_replace($str, '', 0, 1);
    }
    return $str;
}

function sessionUpdate($array, $update = true)
{
    foreach ($array as $kay => $value) {
        $session = session()->get($kay);
        if ($session == null) {
            $session = [];
        }
        if ($update and gettype($value) == 'array') {
            updateProperty($session, $value);
            $value = $session;
        }
        session()->put($kay, $value);
        session()->save();
    }
}

function sessionForget($key)
{
    session()->forget($key);
    session()->save();
}


function validatePhoneNumber($item)
{
    $item = phoneNumberWithZero($item);
    if (strlen($item)) {
        if (!preg_match("/^(09([0-9]{1}[0-9]{1})([0-9]{7}))*$/", $item)) {
            return false;
        }
        return true;
    } else {
        return false;
    }
}

function validateEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}


function updateProperty(&$array, $values)
{
    if (isValidValue($values) != true) {
        $values = [];
    }
    foreach ($values as $key => $value) {
        if (array_key_exists($key, $array)) {
            $array[$key] = $value;
        } else {
            $array += [$key => $value];
        }
    }
}


function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'Kb', 'Mb', 'Gb', 'Tb');

    return round(pow(1024, $base - floor($base)), $precision) . '' . $suffixes[floor($base)];
}


function makeSlug($model, $field, $str, $def = null, $separator = "-")
{
    if ($str == $def and $def != null) {
        return $str;
    }
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZی ه و ن م ل گ ک ق ف غ ع ظ ط ض ص ش س ژ ز ر ذ د خ ح چ ج ث ت پ ب ا ';
    $tempStr = $str;
    for ($index = 0; $index < strlen($tempStr); $index++) {
        $char = $tempStr[$index];
        if (str_contains($characters, $char) != true) {
            $str = str_replace($char, "", $str);
        }
    }
    $str = str_replace(' ', "-", $str);
    $index = 1;
    while (true) {
        if ($model->where($field, $str)->first() == null) {
            return $str;
        } else {
            $str = $str . $separator . strval($index);
            $index += 1;
        }
    }
}

function randomStr($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randString = '';
    for ($i = 0; $i < intval($length); $i++) {
        $randString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randString;
}

function isValidValue($value, $number = false)
{
    if ($value != null and $value != "") {
        if ($number) {
            if (is_numeric($value)) {
                return true;
            } else {
                return false;
            }
        }
        return true;
    } else {
        return false;
    }
}


function strToArray($string, $separator = ',')
{
    $out = [];
    $arrayStr = explode($separator, $string);
    foreach ($arrayStr as $value) {
        if (isValidValue($value)) {
            array_push($out, $value);
        }
    }
    return $out;
}

function authAttempt($login, $password, $remember = false)
{
    return Auth::attempt(['user_login' => $login, 'password' => $password], $remember);
}

function authLogout()
{
    Auth::logout();
    session()->flush();
    session()->save();
}

function miladiToShamsiDate($miladi)
{
    $carbon_time = \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $miladi, new DateTimeZone("UTC"))->getTimestamp();
    return strval(verta($carbon_time)->format('Y-m-d H:i:s'));
}

function floatDecimalPlaces($number, $formatNumber = false, $decimals = 2)
{
    $out = (float)number_format((float)$number, $decimals, '.', '');
//    $out=strval($number);
//    if(str_contains($number,".")){
//        $number_main=explode(".",$number)[0].".";
//        $number_sub=str_split(explode(".",$number)[1]);
//        for ($index=0 ;$index<=1;$index++){
//            $number_main.=$number_sub[$index];
//        }
//        $out=$number_main;
//    }
    if ($formatNumber) {
        $out = number_format($out, 2, '.', '');
    }
    return $out;
}

function updateObject($object, $properties, $values)
{
    $temp = &$object;
    foreach ($properties as $property) {
        $temp =& $temp->$property;
    }
    if ($values != null) {
        try {
            foreach ($values as $key => $value) {
                $temp->$key = $value;
            }
        } catch (\Exception $e) {
            array_merge((array)$temp, $values);
        }
    } else {
        $temp = null;
    }
    return json_decode(json_encode($object));
}

function getProperty($object, $properties = [], $null = true)
{
    if (gettype($properties) == "string") {
        $properties = [$properties];
    }
    try {
        $out = $object;
        foreach ($properties as $property) {
            if (gettype($out) == "object") {
                $out = $out->$property;
            } else {
                $out = $out[$property];
            }
        }
        return $out;
    } catch (\Exception $e) {
        if ($null == true) {
            return null;
        } else {
            return "";
        }
    }
}


function validateIranPhoneNumber($mobile)
{
    if (preg_match("/^(09([0-9]{1}[0-9]{1})([0-9]{7}))*$/", $mobile) == 1) {
        return true;
    } else {
        return false;
    }
}

function getPageItems($allItems, $pageNum, $eachPage = 15)
{
    $num = intval($pageNum);
    if ($num == 0) {
        $num = 1;
    }
    $allPages = ceil(count($allItems) / $eachPage);
    if ($allPages == 0) {
        $allPages = 1;
    }
    if ($allPages < $num) {
        $num = 1;
    }
    if ($num > 0 && $num <= $allPages) {
        $items = $allItems->reverse()->skip(($eachPage * $num) - $eachPage)->take(($eachPage));
    } else {
        $items = [];
    }
    return ['items' => $items, 'allPages' => $allPages, 'currentPage' => $num];
}

function uniqueModelIdStr($model, $field, $length = 60)
{
    $out = randomStr($length);
    while (true) {
        if ($model::where($field, $out)->first() == null) {
            return strval($out);
        }
        $out = randomStr($length);
    }
}

function uniqueModelId($model, $field, $end = 999999999)
{
    $out = str_pad(strval(rand(1, $end)), 9, 0, STR_PAD_LEFT);
    while (true) {
        if ($model::where($field, $out)->first() == null) {
            return strval($out);
        }
        $out = str_pad(strval(rand(1, $end)), 9, 0, STR_PAD_LEFT);
    }
}

function nullToStr($value)
{
    if ($value == null) {
        return "";
    } else {
        return $value;
    }
}


function arrayToJson($array)
{
    return json_decode(json_encode($array));
}

function userLog($userId, $log_type, $content, $orderId = null)
{
    $userLog =new App\Models\user_log();
    $userLog->user_id = $userId;
    $userLog->order_id = $orderId;
    $userLog->log_type = $log_type;
    $userLog->content = $content;
    $userLog->date = strval(verta()->now()->format('Y-m-d'));
    $userLog->time = strval(verta()->now()->format('H:i:s'));
    $userLog->save();
}

function sendSms($receptor, $template, $token, $token2 = null, $token3 = null)
{
    return;
    include_once base_path('vendor/kavenegar-php-master/src/KavenegarApi.php');
    $api = new \Kavenegar\KavenegarApi(env('sms_api_key'));
    return $api->VerifyLookup($receptor, $token, $token2, $token3, $template);
}

function appendToArray(&$array, $value)
{
    if (gettype($array) != 'array') {
        $array = [];
    }
    if (in_array($value, $array) != true) {
        array_push($array, $value);
    }
    return $array;
}

function removeFromArray(&$array, $value)
{
    if (gettype($array) != 'array') {
        $array = [];
    }
    if (in_array($value, $array)) {
        $key = array_search($value, $array);
        if ($key !== false) {
            unset($array[$key]);
        }
        $array = array_values($array);
    }
    return $array;
}

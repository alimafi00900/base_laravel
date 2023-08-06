<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\chat_session;
use App\Http\Requests\addMedia;
use App\Http\Requests\idValidate;
use App\Imports\PeriodsImport;
use App\Models\admin_log;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\chat_media_req;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use App\Http\Helpers\jsonStorage;
use App\Models\generalInfo;

class generalInfoController extends Controller
{

///////// end generalInfo
///////////////////////////////////////////////////////////

    public function generalInfo_edit()
    {
        $generalInfos = [];
        foreach (generalInfo::all() as $generalInfo) {
            $generalInfos += [$generalInfo->name => $generalInfo->content];
        }
        return view('admin.pages.generalInfo.edit', compact('generalInfos'));
    }

    public function generalInfo_change_store_status(Request $request)
    {
        $status = $request->get('status');
        if (isValidValue($status) != true or ($status != "active" and $status != "deactivate")) {
            return back()->withErrors('خطایی رخ داده است');
        }
        generalInfo::where("name", "store_status")->update(["content" => $status]);
        return back()->with(['msg' => "وضعیت فروشگاه تغییر یافت"]);
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
        adminLog('generalInfo_edit_submit', 'ثبت ویرایش تنظیمات عمومی');
        ///////////////////////
        return back()->with(['msg' => 'تنظیمات عمومی با موفقیت ویرایش یافت']);
    }

///////////////////////////////////////////////////////////
///////// end generalInfo
}

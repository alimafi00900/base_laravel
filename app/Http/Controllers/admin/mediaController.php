<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\chat_session;
use App\Http\Requests\addMedia;
use App\Http\Requests\idValidate;
use App\Imports\PeriodsImport;
use App\Models\admin_log;
use App\Models\media;

use App\Models\user_message;
use App\Models\walletTransaction;
use App\Models\wp_wc_order_stats;
use App\Models\user_point_history;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\chat_media_req;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use App\Http\Helpers\jsonStorage;
use App\Models\generalInfo;

class mediaController extends Controller
{


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

}

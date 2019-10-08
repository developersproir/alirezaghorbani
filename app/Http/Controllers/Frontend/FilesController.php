<?php

namespace App\Http\Controllers\Frontend;

use App\Models\File;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FilesController extends Controller
{
    public function details(Request $request,int $file_id)
    {
        $file_item = File::find($file_id);
        $current_user = Auth::user()->id;
        return view('frontend.file.single',compact('file_item','current_user'));
    }
    public function download(Request $request,int $file_id)
    {
        $current_user = Auth::user();

        if (\App\Utility\File::user_can_download($current_user->id)){
            return redirect()->route('frontend.files.access');
        }
        $fileItem = File::find($file_id);
        if (!$fileItem){
            return redirect()->back()->with('fileError','File Is a Not Found');
        }
        $basepath = public_path('File\\');
        $filepath =$basepath.$fileItem->bir_file_name;
        $currentUserSubscribe = $current_user->currentSubscribe()->first();
        $currentUserSubscribe->increment('bir_subscribe_download_count');
        $fileItem->increment('file_download_count');
        $fileItem->updateDownloadCounts();
        return response()->download($filepath);
    }

    public function access()
    {
        return view('frontend.file.access');
    }

    public function report(Request $request)
    {
        $id = $request->input('id');
        if($id && intval($id) > 0)
        {
            $fileItem = File::find($id);
            $fileItem->increment('file_report_count');
            return [
                'success' => true,
                'message' => 'درخواست شما با موفقیت ثبت گردید'
            ];
        }
        return [
            'success' => false,
            'message' => 'درخواست شما معتبر نمی باشد'
        ];
    }
}

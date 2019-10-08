<?php

namespace App\Http\Controllers\Admin;

use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    public function index()
    {
      $files=File::all();
      return view('admin.files.list',compact('files'))->with(['files_activity'=>'uk-open','title_page'=>'All Product',
          'detils_admin'=>'All Product Your Site.']);
    }

    public function create()
    {
        return view('admin.files.create')->with(['files_activity'=>'uk-open','title_page'=>'Add New Product',
            'detils_admin'=>'Add new Product Your Site.']);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'bir_file_title' => 'required',
            'fileItem' => 'required'
        ], [
            'file_title.required' => 'وارد کردن نام فایل الزامی می باشد',
            'fileItem.required' => 'انتخاب فایل الزامی می باشد.',
        ]);
        $new_file_data = [
            'bir_file_title' => $request->input('bir_file_title'),
            'bir_file_description' => $request->input('bir_file_description'),
            'bir_file_type'   => $request->file('fileItem')->getMimeType(),
            'bir_file_size'   => $request->file('fileItem')->getClientSize(),
        ];
        $new_file_name = str_random(45).'.'.$request->file('fileItem')->getClientOriginalExtension();
        $result = $request->file('fileItem')->move(public_path('File'),$new_file_name);
        if($result instanceof \Symfony\Component\HttpFoundation\File\File){
            $new_file_data['bir_file_name'] = $new_file_name;
            File::create($new_file_data);
            return redirect()->route('admin.files.list')->with('success_product',true);
        }



    }
    public function edit(Request $request,$file_id)
    {
        $file_id = intval($file_id);
        $fileItem=File::find($file_id);
        return view('admin.files.edit',compact('fileItem'))->with(['files_activity'=>'uk-open','title_page'=>'Edit Product',
            'detils_admin'=>'Edit Product and add to this site.']);
    }

    public function update(Request $request,$file_id)
    {
        $file_id=intval($file_id);

        $fileItem =File::find($file_id);

        $update_file = $fileItem->update([
            'bir_file_title' => $request->input('bir_file_title'),
            'bir_file_description' => $request->input('bir_file_description'),
        ]);


        if($update_file){
            return redirect()->route('admin.files.list')->with('success_product',true);

        }


    }
    public function remove(Request $request,$file_id)
    {
        $file_id = intval($file_id);
        $fileItem=File::find($file_id);
        if ($fileItem){
            $fileItem->delete();
            return redirect()->route('admin.files.list')->with('file_deleted','remove');
        }
    }


}

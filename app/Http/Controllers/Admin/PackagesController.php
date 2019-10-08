<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\File;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackagesController extends Controller
{
    public function index()
    {

        $packages = Package::all();
        return view('admin.package.list' , compact('packages'))->with(['package_activity'=>'uk-open','title_page'=>'All Package',
            'detils_admin'=>'All Package Your Site.']);
    }
    public function create()
    {
        $categories= Category::all();
        return view('admin.package.create',compact('categories'))->with(['package_activity'=>'uk-open','title_page'=>'Create Package',
            'detils_admin'=>'Create  new Package Your Site.']);
    }

    public function store(Request $request)
    {
        $new_package= Package::create([
            'package_title'=>$request->input('package_title'),
            'package_price'=>$request->input('package_price'),
        ]);
        if ($new_package){
            if ($request->has('categorize')){
                 $new_package->categories()->sync($request->input('categorize'));
            }
            return redirect()->route('admin.packages.list')->with('package','package New');
        }
    }

    public function edit(Request $request,$package_id)
    {
        $package_item = Package::find($package_id);
        $categories=Category::all();
        $package_category = $package_item->categories()->get()->pluck('category_id')->toArray();
        $packageItem=package::find($package_id);
        return view('admin.package.edit',compact('packageItem','categories','package_category'))->with(['package_activity'=>'uk-open','title_page'=>'Edit Package',
            'detils_admin'=>'Edit Package Your Site.']);

    }

    public function update(Request $request,$package_id)
    {
        $package_item = Package::find($package_id);
        if ($package_item) {
           $package_item -> update(
                [
                    'package_title' => $request->input('package_title'),
                    'package_price' => $request->input('package_price'),
                ]
            );
           if ($request->has('categorize')){
               $package_item->categories()->sync($request->input('categorize'));
           }
        }
            return redirect()->route('admin.packages.list')->with('package_edit','package New');
    }

    public function remove(Request $request,$package_id)
    {
        $package_id = intval($package_id);
        $packageItem=package::find($package_id);
        if ($packageItem){
            $packageItem->delete();
            return redirect()->route('admin.packages.list')->with('package_deleted','remove');
        }
    }

    public function syncFiles(Request $request,$package_id)
    {
        $files = File::all();
        $package_item = Package::find($package_id);
        $package_files = $package_item->files()->get()->pluck('id')->toArray();
        return view('admin.package.files',compact('files','package_files'))->with(['package_activity'=>'uk-open','title_page'=>'Sync File',
            'detils_admin'=>'Sync Package please Selected File Your Site.']);
    }

    public function updatesyncFiles(Request $request,$package_id)
    {
        $package_item=Package::find($package_id);
        $files=$request->input('files');
        if ($package_item && is_array($files)){
            $package_item->files()->sync($files);
            return redirect()->route('admin.packages.list')->with('package_edit','package New');;
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.list',compact('categories'))->with(['category_activity'=>'uk-open','title_page'=>'All Category',
            'detils_admin'=>'All Category Your Site.']);;
    }

    public function create()
    {
        return view('admin.category.create')->with(['category_activity'=>'uk-open','title_page'=>'Add New Category',
            'detils_admin'=>'Add new Category Your Site.']);;;
    }

    public function store(Request $request)
    {

        $new_category = Category::create([
            'category_name' => $request->input('category_name')
        ]);
        if ($new_category){
            return redirect()->route('admin.categories.list')->with('success_category',true);
        }
    }

    public function edit(Request $request,$category_id)
    {
        $catItem = Category::find($category_id);
        return view('admin.category.edit',compact('catItem'))->with(['category_activity'=>'uk-open','title_page'=>'Edit Category',
            'detils_admin'=>'Edit Category Your Site.']);;;
    }

    public function update(Request $request,$category_id)
    {
        $catItem = Category::find($category_id);
        $updateResult = $catItem->update([
            'category_name' => $request->input('category_name')
        ]);
        if ($updateResult){
            return redirect()->route('admin.categories.list')->with('update_category',true);
        }
    }

    public function remove(Request $request,$category_id)
    {
        $removeResult = Category::destroy([$category_id]);
        if ($removeResult){
            return redirect()->route('admin.categories.list')->with('remove_category',true);
        }
    }
}

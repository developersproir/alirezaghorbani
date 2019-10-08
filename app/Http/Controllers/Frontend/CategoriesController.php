<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        
    }

    public function item(Request $request,$category_id)
    {
        $categoryItem=Category::find($category_id);
        $categoryFiles = $categoryItem->files;
        $categoryPackages = $categoryItem->packages;
        return view('frontend.category.item',compact('categoryItem','categoryFiles','categoryPackages'));
    }
}

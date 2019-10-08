<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\File;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $files=File::take(10)->get();
        $packages=Package::take(10)->get();
        $categories=Category::all();
        $popularFiles=File::popular()->get();
        return view('frontend.home.index',compact('files','packages','categories','popularFiles'));
   }
}

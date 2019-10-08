<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function details(Request $request,int $pack_id)
    {
        $packageItem = Package::find($pack_id);
        $packageFiles=$packageItem->files;
        return view('frontend.packages.details',compact('packageItem','packageFiles'));
    }
}

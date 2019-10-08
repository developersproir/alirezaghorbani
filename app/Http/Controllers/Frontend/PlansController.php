<?php

namespace App\Http\Controllers\Frontend;

use App\Models\plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlansController extends Controller
{
    public function index()
    {
        $plans=plan::all();
        return view('frontend.plans.index',compact('plans'));
    }
}

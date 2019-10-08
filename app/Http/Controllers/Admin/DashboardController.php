<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index')->with(['dashboard_activity'=>'uk-open','title_page'=>'Dashboard',
            'detils_admin'=>'Last Your Site.']);
   }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('admin.payment.list',compact('payments'))->with(['payment_activity'=>'uk-open','title_page'=>'All Payments',
            'detils_admin'=>'List Payments Your Site.']);
    }

    public function remove()
    {
        
    }
}

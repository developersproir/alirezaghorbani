<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\UserSubscribed;
use App\Models\plan;
use App\Models\subscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function index(Request $request,int $plan_id)
    {
        $plan = plan::find($plan_id);
        return view('frontend.subscribe.index',compact('plan'));
    }

    public function register(Request $request,int $plan_id)
    {
        $plan=plan::find($plan_id);
        if (!$plan){
            return redirect()->back()->with('PlanError','Not Found Plans');
        }
        $plan_days_count= $plan->bir_plan_days_count;
        $expired_at=Carbon::now()->addDay($plan_days_count);
        $user = Auth::user();
        $subscriData = [
            'bir_subscribe_user_id' => $user->id,
            'bir_subscribe_plan_id' =>$plan_id,
            'bir_subscribe_download_limit' =>$plan->bir_plan_download_limit,
            'bir_subscribe_create_at' =>Carbon::now(),
            'bir_subscribe_payment_expied_date' =>$expired_at->format('Y-m-d H:i:s')
        ];
        $subscribe = subscribe::create($subscriData);
        Mail::to($user)->later(Carbon::now()->addMinutes(1),new UserSubscribed($subscribe));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlansController extends Controller
{
    public function index()
    {
        $plans= plan::all();
        return view('admin.plan.list',compact('plans'))->with(['plan_activity'=>'uk-open','title_page'=>'All Plans',
            'detils_admin'=>'All Plans Your Site.']);
   }

    public function create()
    {
        return view('admin.plan.create')->with(['plan_activity'=>'uk-open','title_page'=>'Add Plans Product',
            'detils_admin'=>'Add New Plans Product Your Site.']);
   }

    public function store(Request $request)
    {
        $this->validate($request,[

            'bir_plan_title' => 'required',
            'bir_plan_download_limit' => 'required',
            'bir_plan_prce' => 'required',
            'bir_plan_days_count' => 'required',

        ],[
            'bir_plan_title.required' => 'Enter title is a required',
            'bir_plan_download_limit.required' => 'Plan download limit  is a required',
            'bir_plan_prce.required' => 'Price Plan  is a required',
            'bir_plan_days_count.required' => 'Days Count  is a required',
        ]);
        $new_plan = plan::create([

            'bir_plan_title'=> $request->input('bir_plan_title'),
            'bir_plan_download_limit'=> $request->input('bir_plan_download_limit'),
            'bir_plan_prce'=> $request->input('bir_plan_prce'),
            'bir_plan_days_count'=> $request->input('bir_plan_days_count'),

        ]);
        if ($new_plan){
            return redirect()->route('admin.plans.list')->with('success_plan','Created');
        }
   }

    public function edit(Request $request,$plan_id)
    {
        $plan_id = intval($plan_id);
        $planItem=plan::find($plan_id);
        return view('admin.plan.edit',compact('planItem'));
    }

    public function update(Request $request,$plan_id)
    {
        $plan_id=intval($plan_id);

        $planItem =plan::find($plan_id);
        $update_plan =  $planItem->update(
            [
                'bir_plan_title'=> $request->input('bir_plan_title'),
                'bir_plan_download_limit'=> $request->input('bir_plan_download_limit'),
                'bir_plan_prce'=> $request->input('bir_plan_prce'),
                'bir_plan_days_count'=> $request->input('bir_plan_days_count'),
            ]
        );
        if ($update_plan){
            return redirect()->route('admin.plans.list')->with('success_plan_update','update');
        }
   }

    public function remove(Request $request,$plan_id)
    {
       $plan_id = intval($plan_id);
       $planItem=plan::find($plan_id);
       if ($planItem){
           $planItem->delete();
           return redirect()->route('admin.plans.list')->with('plan_deleted','remove');
       }
   }
}

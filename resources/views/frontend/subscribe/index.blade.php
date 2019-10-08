@extends('layouts.frontend')
@section('content')
    <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Information Plan Buy.</p>
    </div>
    <table class="uk-table uk-table-hover uk-table-divider">
        <tr>
            <td>Title</td>
            <td>{{$plan->bir_plan_title}}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>{{number_format($plan->bir_plan_prce)}}</td>
        </tr>
       <tr>
           <td>Limited Download</td>
           <td>{{$plan->bir_plan_days_count}}</td>
       </tr>
        <tr>
            <td>Day Number</td>
            <td>{{$plan->bir_plan_download_limit}}</td>
        </tr>
    </table>
    <form action="{{route('frontend.subscribe.register',[$plan->id])}}" method="post">
        {{csrf_field()}}

        <input type="hidden" name="plan_id" value="{{$plan->id}}">
        <button>Buy this Plan</button>
    </form>
@endsection
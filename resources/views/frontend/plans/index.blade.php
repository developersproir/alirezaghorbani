@extends('layouts.frontend')
@section('content')
    <table class="uk-table uk-table-hover uk-table-divider">
        <thead>
        <tr>
            <th>Title Plan</th>
            <th>Price</th>
            <th>Number Day</th>
            <th>Limited Download days</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>

            @if($plans && count($plans) > 0)
                @foreach($plans as $plan)
                    <tr>
                    <td>{{$plan->bir_plan_title}}</td>
                    <td>{{number_format($plan->bir_plan_prce)}}</td>
                    <td>{{$plan->bir_plan_days_count}}</td>
                    <td>{{$plan->bir_plan_download_limit}}</td>
                    <td>
                        <a href="{{route('frontend.subscribe.index',[$plan->id])}}">Buy Plan</a>
                    </td>
                    </tr>
                @endforeach
            @endif

        </tbody>
    </table>



@endsection
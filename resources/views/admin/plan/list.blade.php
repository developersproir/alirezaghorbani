@extends('layouts.admin')
@section('content')
    @include('admin.user.notifcations')
    @if($plans && count($plans) > 0)
        <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
            <thead>
            <tr>
                <th style="text-align: center" class="uk-table-shrink">Edit Plan</th>
                <th class="uk-table-shrink">Plan Name </th>
                <th class="uk-width-small">Download limit</th>
                <th class="uk-width-small">Price</th>
                <th class="uk-table-shrink uk-text-nowrap">Number of days of credit</th>
            </tr>
            </thead>

        @foreach($plans as $plan)

            @include('admin.plan.item',$plans)

        @endforeach
        </table>
    @else
        @include('admin.plan.no-item')
@endif


@endsection
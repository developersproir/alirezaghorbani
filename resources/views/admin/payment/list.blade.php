@extends('layouts.admin')
@section('content')
    @include('admin.user.notifcations')
    @if($payments && count($payments) > 0)
        <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
            <thead>
            <tr>
                <th style="text-align: center" class="uk-table-shrink">Edit</th>
                <th class="uk-table-shrink">User </th>
                <th class="uk-width-small">Mount</th>
                <th class="uk-width-small">Mount Type</th>
                <th class="uk-width-small">Reserve Number</th>
                <th class="uk-width-small">Bank </th>
                <th class="uk-width-small">Date payment</th>
                <th class="uk-width-small">Condition</th>
                <th class="uk-table-shrink uk-text-nowrap">Pay Type</th>

            </tr>
            </thead>

        @foreach($payments as $payment)

            @include('admin.payment.item',$payments)

        @endforeach
        </table>
    @else
        @include('admin.payment.no-item')
@endif


@endsection
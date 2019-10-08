@extends('layouts.admin')
@section('content')
    @include('admin.user.notifcations')

    @if($users && count($users) > 0)
        <div class="uk-overflow-auto">
            <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                <thead>
                <tr>
                    <th style="text-align: center" class="uk-table-shrink">Edit Account</th>
                    <th class="uk-table-shrink">ID </th>
                    <th class="uk-width-small">User Name</th>
                    <th class="uk-width-small">Email</th>
                    <th class="uk-table-shrink uk-text-nowrap">Wallet</th>
                    <th class="uk-table-shrink uk-text-nowrap">Package Number</th>
                    <th class="uk-table-shrink uk-text-nowrap">Role</th>
                </tr>
                </thead>

        @foreach($users as $user)

            @include('admin.user.item',$user)

        @endforeach

            </table>
        </div>
    @endif

@stop
@extends('layouts.admin')
@section('content')
    @include('admin.user.notifcations')
    @if($packages && count($packages) > 0)
        <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
            <thead>
            <tr>
                <th style="text-align: center" class="uk-table-shrink">Edit package</th>
                <th class="uk-table-shrink">Title Package </th>
                <th class="uk-width-small">Price Package</th>
                <th class="uk-width-small">Category</th>
                <th class="uk-width-small">Number File</th>
            </tr>
            </thead>

        @foreach($packages as $package)

            @include('admin.package.item',$packages)

        @endforeach
        </table>
    @else
        @include('admin.package.no-item')
@endif


@endsection
@extends('layouts.admin')
@section('content')
    @include('admin.user.notifcations')
    @if($categories && count($categories) > 0)
        <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
            <thead>
            <tr>
                <th style="text-align: center" class="uk-table-shrink">Edit Categories</th>
                <th class="uk-table-shrink">ID </th>
                <th class="uk-table-shrink">Category Name </th>
            </tr>
            </thead>

        @foreach($categories as $category)

            @include('admin.category.item',$category)

        @endforeach
        </table>
    @else
        @include('admin.category.no-item')
@endif


@endsection
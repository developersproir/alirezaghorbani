@extends('layouts.admin')
@section('content')
    @include('admin.user.notifcations')
    @if($files && count($files) > 0)

        <ul class="file_product_all_page___">

                @foreach($files as $files)

                    @include('admin.files.item',$files)

                @endforeach
                    @else
                        @include('admin.files.no-item')
        </ul>
    @endif

@endsection
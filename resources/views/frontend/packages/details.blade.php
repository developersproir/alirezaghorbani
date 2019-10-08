@extends('layouts.frontend')
@section('content')
    <h1>{{$packageItem->package_title}}</h1>
    <p>Package List</p>
    <ul>
        @foreach($packageFiles as $file)
        <li>
            <a href="{{route('frontend.files.details',[$file->id])}}">{{$file->bir_file_title}}  / <span>{{number_format($packageItem->package_price)}}</span></a>
        </li>
            @endforeach
    </ul>
@endsection
@extends('layouts.frontend')
@section('content')
    Category List <strong>{{$categoryItem->category_name}}</strong>

    <ul>
    @foreach($categoryPackages as $package)
        <li>
            <a href="{{route('frontend.package.details',[$package->package_id])}}">{{$package->package_title}} </a>
        </li>
    @endforeach
    </ul>
@endsection
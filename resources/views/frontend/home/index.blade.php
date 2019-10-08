@extends('layouts.frontend')
@section('content')
    @if($files && count($files) > 0)
        <dl class="uk-description-list uk-description-list-divider">
        @foreach($files as $file)
                <dt>
                    <a class="uk-display-block uk-card uk-card-body uk-card-default uk-link-toggle uk-width-medium" href="{{route('frontend.files.details',$file->id)}}">{{$file->bir_file_title}}</a></dt>
         @endforeach
        </dl>
    @endif
    <h1 class="uk-heading-line uk-text-center"><span>Packages</span></h1>

    @if($packages && count($packages) > 0)
        <ul class="uk-list uk-list-striped" >
            @foreach($packages as  $package)
                <li>  <a href="{{ route('frontend.package.details',[$package->package_id])  }}">
                        <h1 class="uk-heading-line"><span>{{ $package->package_title  }}</span></h1></a>
                </li>
            @endforeach
        </ul>
    @endif
    <h1 class="uk-heading-line uk-text-center"><span>Categories</span></h1>
    @if($categories && count($categories) > 0 )
        @foreach($categories as $category)
            <a href="{{route('frontend.category.item',[$category->category_id])}}">{{$category->category_name}}</a>
            @endforeach
    @endif
    <h1 class="uk-heading-line uk-text-center"><span>Popular Files</span></h1>
    @if($popularFiles && count($popularFiles) > 0 )
        @foreach($popularFiles as $file)
            <a class="uk-display-block uk-card uk-card-body uk-card-default uk-link-toggle uk-width-medium" href="{{route('frontend.files.details',$file->id)}}">{{$file->bir_file_title}}</a>
        @endforeach
    @endif
@endsection
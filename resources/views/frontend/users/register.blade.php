@extends('layouts.frontend')
@section('content')
    @if(session('registerError'))
        ImportFPrm
    @endif
    <form method="post" action="{{route('post.register')}}">
        {{csrf_field()}}
        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input" name="bir_email" type="text">
            </div>
        </div>
        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input" name="bir_full_name" type="text">
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                <input class="uk-input" name="password" type="password">
            </div>
        </div>

        <button type="submit">Register</button>
    </form>

@endsection
@extends('layouts.frontend')
@section('content')
    @if(session('loginError'))
        Account Does Not Exist
        @endif
    <form method="post" action="{{route('post.login')}}">
                {{csrf_field()}}
                <input class="uk-input" name="email" type="text">

                <input type="password" name="password" class="input_bir">

                <label>
                    Save
                    <input type="checkbox" name="remember">
                </label>
        <button type="submit">Login</button>
    </form>

@endsection
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BirCompany</title>
    <link rel="stylesheet" href="{{asset('/public/css/app.css')}}">
    <script src="{{asset('/public/js/app.js')}}"></script>
    <script src="{{asset('/resources/assets/js/select2.min.js')}}"></script>

</head>
<body>
<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-center">

        <div class="uk-navbar-center-left"><div>
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="{{asset('')}}">Home</a></li>
                </ul>
            </div></div>
        @if(!\Illuminate\Support\Facades\Auth::check())
        <a class="uk-navbar-item uk-logo" href="{{route('login')}}">Logo</a>
        <div class="uk-navbar-center-right"><div>
                <ul class="uk-navbar-nav">
                    <li><a href="{{route('register')}}">Register</a></li>
                </ul>
            </div></div>
        @else
            <ul class="uk-navbar-nav">
                <li>
                    <button class="uk-button uk-button-default" type="button">welcome <strong>{{\Illuminate\Support\Facades\Auth::user()->bir_full_name}}</strong> </button>
                    <div uk-dropdown="animation: uk-animation-slide-top-small; duration: 1000">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li class="uk-active"><a href="{{route('user.dashboard')}}">Panel</a></li>
                            <li><a href="{{route('post.logout')}}">Logout</a></li>
                        </ul>
                    </div>

                    </li>
            </ul>
        @endif
    </div>
</nav>

@yield('content')
</body>
</html>
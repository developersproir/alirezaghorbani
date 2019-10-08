<!doctype html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/public/css/app.css')}}">
    <script src="{{asset('/public/js/app.js')}}"></script>
    <script src="{{asset('/resources/assets/js/select2.min.js')}}"></script>
    <script>tinymce.init({selector:'#bir_file_description'});</script>

</head>
<body>

    @include('admin.partials.navigate')

    <section id="content_panel_admin_page__">
        @include('admin.toolbar.index')
        <section class="page_detils_panel_admin">

            <h1>{{isset($title_page) ? $title_page : ''}}</h1>
        </section>
        <section id="detils_panel_page_des">
            <p>
                {{isset($detils_admin) ? $detils_admin : ''}}
            </p>
        </section>
        <section class="admin_panel_page_settings_content">
            @yield('content')
        </section>

    </section>

</body>
</html>
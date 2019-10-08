const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(function (mix){
        mix.styles([
            './resources/assets/css/all.css',
            './resources/assets/css/hover-min.css',
            './resources/assets/css/svg-icons.css',
            './resources/assets/css/uikit.min.css',
            './resources/assets/css/select2.min.css',
            './resources/assets/css/reset.css',
            './resources/assets/css/admin-style.min.css'
    ],'public/css/app.css');
        mix.scripts([
           './resources/assets/js/jquery-1.12.4.min.js',
           './resources/assets/js/uikit.min.js',
           './resources/assets/js/uikit-icons.min.js',
            './resources/assets/js/tinymce.min.js',
        ],'public/js/app.js');
});

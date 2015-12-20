var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss', 'resources/css');
    /*
    mix.styles([
        'libs/bootstrap.min.css',
        'app.css'
    ]);
    */

    //mix.version('public/css/all.css');

    //mix.phpUnit();

});
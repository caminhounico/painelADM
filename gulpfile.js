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

elixir(function(mix) {

  //Home
    mix.styles([
        'semantic.css',
        'custom.css'
    ], 'public/assets/css/style.css');
    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.js',
        'semantic.js',
        'custom.js'
    ], 'public/assets/js/script.js')

    //Admin
    mix.styles([
        'admin/css/semantic.css',
        'admin/css/custom.css'
    ], 'public/assets/admin/css/style.css');

    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.js',
        'admin/js/semantic.js',
        'admin/js/custom.js'
    ], 'public/assets/admin/js/script.js')
});
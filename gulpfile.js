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
        'semantic.css',
        'admin/custom.css'
    ], 'public/assets/admin/css/style.css');

    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.js',
        'semantic.js',
        'admin/custom.js'
    ], 'public/assets/admin/js/script.js')

    //Admin-AUTH
    mix.styles([
        'semantic.css',
        'admin/auth/custom.css'
    ], 'public/assets/admin/auth/css/style.css');

    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.js',
        'semantic.js',
        'admin/auth/custom.js'
    ], 'public/assets/admin/auth/js/script.js')
});
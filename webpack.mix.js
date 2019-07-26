const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

//mix.js('resources/js/app.js', 'public/js')
 //   .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'resources/admin/assets/css/bootstrap.min.css',
    'resources/admin/assets/css/font-awesome.min.css',
    'resources/admin/assets/css/ionicons.min.css',
    'resources/admin/assets/css/dataTables.bootstrap.min.css',
    'resources/admin/assets/css/ionicons.min.css',
    'resources/admin/assets/css/AdminLTE.min.css',
    'resources/admin/assets/css/skin-purple.min.css'
], 'public/css/admin.css');

mix.script([
    'resources/admin/assets/js/jquery.min.js',
    'resources/admin/assets/js/bootstrap.min.js',
    'resources/admin/assets/js/jquery.dataTables.min.js',
    'resources/admin/assets/js/dataTables.bootstrap.min.js',
    'resources/admin/assets/js/adminlte.min.js',
    'resources/admin/assets/js/select2.fuull.min.js'
], 'public/js/admin.js');












































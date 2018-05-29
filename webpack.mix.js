const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.scripts([
    'public/sbadmin/vendor/jquery/jquery.min.js',
    'public/sbadmin/vendor/bootstrap/js/bootstrap.min.js',
    'public/sbadmin/vendor/metisMenu/metisMenu.min.js',
    'public/sbadmin/dist/js/sb-admin-2.js',
    'public/select2/js/select2.full.min.js',
    'public/js/moment.js',
    'public/js/custom.js',
], 'public/js/all.js')
.version();

mix.styles([
    'public/sbadmin/vendor/bootstrap/css/bootstrap.min.css',
    'public/sbadmin/vendor/metisMenu/metisMenu.min.css',
    'public/sbadmin/dist/css/sb-admin-2.css',
    'public/sbadmin/vendor/font-awesome/css/font-awesome.css',
    'public/select2/css/select2.min.css',
    'public/css/custom.css',
], 'public/css/all.css')
.version();

const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.js('resources/js/app.js', 'public/js')
mix.sass('resources/sass/main.scss', 'public/css').options({
    postCss: [
    require('autoprefixer')({
        overrideBrowserslist: ['last 6 versions']
        })
    ]}).version()


let mix = require('laravel-mix');

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
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/portal.scss', 'public/css');

// mix.js('resources/assets/wj-app.js', 'public/js');

/**
 * NOTE:
 * In order to use the NPM RUN WATCH command, you need to run 
 * php artian serve first
 * for some reason this doesn't work in git bash
 * only works in VS code
 */

mix.browserSync('http://localhost:8000/');
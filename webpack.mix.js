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

mix.js('resources/assets/wj-app.js', 'public/js');


// ADMINWRAP LITE PACKAGES CSS
mix.copy('node_modules/bootstrap/css/bootstrap.min.css', 'public/css/bootstrap/css/bootstrap.min.css');
mix.copy('node_modules/perfect-scrollbar/css/perfect-scrollbar.min.css', 'public/css/perfect-scrollbar.min.css');
mix.copy('node_modules/morrisjs/morris.css', 'public/css/morrisjs/morris.css');
mix.copy('node_modules/c3-master/c3.min.css', 'public/css/c3-master/c3.min.css');
  

// ADMINWRAP LITE PACKAGES JS
mix.copy('node_modules/jquery/dist/jquery.3.2.0.min.js', 'public/js/jquery.3.2.0.min.js');
mix.copy('node_modules/bootstrap/js/dist/popper.min.js', 'public/js/popper.min.js');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
mix.copy('node_modules/raphael/raphael-min.js', 'public/js/raphael/raphael-min.js');
mix.copy('node_modules/morrisjs/morris.min.js', 'public/js/morrisjs/morris.min.js');

mix.copy('node_modules/d3/dist/d3.min.js', 'public/js/d3/d3.min.js');
mix.copy('node_modules/c3-master/c3.min.js', 'public/js/c3-master/c3.min.js');

mix.browserSync('http://localhost:8000/');
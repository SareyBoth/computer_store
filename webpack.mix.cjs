const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .version();
mix.browserSync('127.0.0.1:8000');
mix.copy('resources/images', 'public/images');

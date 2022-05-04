let mix = require('laravel-mix');

mix.js('src/app.js', 'js')
   .sass('src/app.scss', 'css')
   .browserSync("http://localhost/manracing-new")
   .setPublicPath('dist');

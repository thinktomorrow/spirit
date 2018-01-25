const { mix } = require('laravel-mix');

mix.sass('src/spirit.scss', 'public/assets/css')
    .sass('node_modules/warpaint/src/sass/warpaint.scss', 'public/assets/css')
    .options({
        processCssUrls: false,
    });

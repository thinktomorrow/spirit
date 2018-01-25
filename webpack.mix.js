const { mix } = require('laravel-mix');

mix.sass('src/spirit.scss', 'public/assets/css')
.options({
    processCssUrls: false,
});

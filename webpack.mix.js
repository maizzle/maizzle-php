let mix = require('laravel-mix');
let tailwind = require('tailwindcss');
let build = require('./tasks/js/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss']),
    ]
});

mix.sass('source/_assets/sass/main.scss', 'css/main.css')
    .sass('source/_assets/sass/extra.scss', 'css/extra.css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwind('tailwind.js'),
        ]
    });

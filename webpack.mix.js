let mix = require('laravel-mix');
let argv = require('yargs').argv;
let tailwind = require('tailwindcss');
let build = require('./tasks/js/build.js');
require('laravel-mix-purgecss');

let env = argv.e || argv.env || 'local';

mix.disableSuccessNotifications();
mix.setPublicPath('source/css/');
mix.webpackConfig({
  plugins: [
    build.jigsaw,
    build.browserSync(),
    build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
  ]
});

mix.sass('source/_styles/extra.scss', 'extra.css')
  .sass('source/_styles/main.scss', 'main.css')
  .options({
    processCssUrls: false,
    postCss: [
      tailwind('tailwind.js'),
    ]
  }).purgeCss({
    enabled: env !== 'local',
    extensions: ['php', 'md'],
    folders: ['source'],
    only: ["main.css"],
  });


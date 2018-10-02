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

mix.less('source/_styles/extra.less', 'extra.css')
  .less('source/_styles/main.less', 'main.css')
  .options({
    processCssUrls: false,
    postCss: [
      tailwind('tailwind.js'),
      require('postcss-merge-longhand'),
    ]
  }).purgeCss({
    enabled: env !== 'local',
    extensions: ['php', 'md'],
    folders: ['source'],
    only: ["main.css"],
  });


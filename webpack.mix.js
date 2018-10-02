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

mix.options({
    processCssUrls: false,
    postCss: [
      require('postcss-import'),
      tailwind('tailwind.js'),
      require('postcss-merge-longhand'),
    ]
  })
  .postCss('source/_styles/extra.css', 'extra.css')
  .postCss('source/_styles/main.css', 'main.css')
  .purgeCss({
    enabled: env !== 'local',
    extensions: ['php', 'md'],
    folders: ['source'],
    only: ["main.css"],
  });


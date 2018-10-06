let mix = require('laravel-mix');
let argv = require('yargs').argv;
let tailwind = require('tailwindcss');
let build = require('./tasks/js/build.js');
let atImport = require('postcss-import');
let mergeLonghand = require('postcss-merge-longhand');
require('laravel-mix-purgecss');

let env = argv.e || argv.env || 'local';

mix.disableSuccessNotifications();
mix.setPublicPath('source/css/');
mix.webpackConfig({
  plugins: [
    build.jigsaw,
    build.browserSync(),
    build.watch(['source/**/*.md', 'source/**/*.php', 'source/_styles/**/*.css', '!source/**/_tmp/*']),
  ]
});

mix.options({
    processCssUrls: false,
    postCss: [
      atImport(),
      tailwind('tailwind.js'),
      mergeLonghand(),
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


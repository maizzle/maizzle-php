<?php

/*

|-------------------------------------------------------------------------------
| The production config           http://jigsaw.tighten.co/docs/site-variables/
|-------------------------------------------------------------------------------
|
| This array contains the default Maizzle config for production. It's used
| when you do `npm run production` in the command line, and it will be
| merged on top of your default config.
|
*/

return [

  /*
  |-------------------------------------------------------------------------------
  | Output transformations
  |-------------------------------------------------------------------------------
  |
  | These settings are tailored for production - this is what controls
  | how the HTML you'll use in your campaigns is formatted.
  |
  */

  'transforms' => [
      'cleanup' => [
          'removeUnusedCss' => true,
          'removeTableWidthCss' => true,
          'preferBgColorAttribute' => true,
      ],
      'prettify' => false,
      'minify' => [
          'minifyHtml' => true,
          'minifyCss' => true,
          'maxLineLength' => 500,
      ],
  ],

  /*
  |-----------------------------------------------------------------------------
  | Jigsaw build defaults
  |-----------------------------------------------------------------------------
  |
  | Leave these alone unless you really know what you're doing.
  |
  */

  'baseUrl' => '',
  'production' => true,
  'build' => [
      'source' => 'source',
      'destination' => 'build_production',
  ],
];

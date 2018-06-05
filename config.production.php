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

    'minify' => [
        'html' => true,
        'css' => true,
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
        'destination' => 'build_production/dist',
    ],
];

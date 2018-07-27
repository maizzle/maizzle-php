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
    | Output transformations                  https://docs.maizzle.com/transformers
    |-------------------------------------------------------------------------------
    |
    | These settings are tailored to production - this is what controls
    | how the HTML you'll use in your campaigns is formatted.
    |
    */

    'transformers' => [
        'baseImageURL' => '',
        'inlineCSS' => [
            'enabled' => true,
            'removeStyleTags' => true,
        ],
        'cleanup' => [
            'removeUnusedCss' => [
                'enabled' => true,
                'whitelist' => [
                    ".External*",
                    ".ReadMsgBody",
                    ".yshortcuts",
                    ".Mso*",
                    "#outlook",
                ],
            ],
            'removeTableWidthCss' => true,
            'preferBgColorAttribute' => true,
        ],
        'prettify' => false,
        'minify' => [
            'minifyCSS' => true,
            'maxLineLength' => 500,
            'preserveLineBreaks' => false,
            'collapseWhitespace' => true,
            'conservativeCollapse' => false,
            'processConditionalComments' => true,
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

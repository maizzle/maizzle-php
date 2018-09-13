<?php

/*

|-------------------------------------------------------------------------------
| The staging config              http://jigsaw.tighten.co/docs/site-variables/
|-------------------------------------------------------------------------------
|
| This array contains the default Maizzle config for staging/testing. It's
| used when you do `npm run staging` in the command line, and it will
| be merged on top of your default config.
|
| These settings are tailored for email render testing and debugging.
| Output is similar to production, but with pretty indented code
| and no minification.
|
*/

return [

    /*
    |-------------------------------------------------------------------------------
    | Transformers             https://maizzle.com/docs/configuration/#transformers
    |-------------------------------------------------------------------------------
    |
    | These settings are tailored to email render testing and debugging.
    | Output is similar to production, but with pretty indented code
    | and no minification.
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
            'preferAttributeWidth' => [
                'table' => true,
                'td' => true,
                'th' => true,
                'img' => true,
            ],
            'preferBgColorAttribute' => true,
        ],
        'prettify' => true,
        'minify' => [
            'minifyCSS' => false,
            'maxLineLength' => false,
            'preserveLineBreaks' => false,
            'collapseWhitespace' => false,
            'conservativeCollapse' => false,
            'processConditionalComments' => false,
        ],
        'sixHex' => true,
        'altText' => true,
    ],

    /*
    |-----------------------------------------------------------------------------
    | Build defaults       https://maizzle.com/docs/configuration/#build-defaults
    |-----------------------------------------------------------------------------
    |
    | Configure additional Jigsaw build settings.
    |
    */

    'baseUrl' => '',
    'production' => true,
    'build' => [
        'source' => 'source',
        'destination' => 'build_staging',
    ],
];

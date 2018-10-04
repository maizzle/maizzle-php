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
    | Transformers             https://maizzle.com/docs/configuration/#transformers
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
            'styleToAttribute' => [
                'background-color' => 'bgcolor',
                'background-image' => 'background',
                'text-align' => 'align',
                'vertical-align' => 'valign',
            ],
            'applySizeAttribute' => [
                'width' => ['TABLE', 'TD', 'TH', 'IMG', 'VIDEO'],
                'height' => ['TABLE', 'TD', 'TH', 'IMG', 'VIDEO'],
            ],
            'excludedProperties' => [],
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
                'removeHTMLComments' => [
                    'enabled' => true,
                    'preserve' => ['if', 'endif', 'mso', 'ie'],
                ],
                'uglify' => true,
            ],
            'preferAttributeWidth' => [
                'table' => true,
                'td' => true,
                'th' => true,
                'img' => true,
            ],
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
        'sixHex' => true,
        'altText' => true,
    ],

    'plaintext' => true,

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
        'destination' => 'build_production',
    ],
];

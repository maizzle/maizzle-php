<?php

/*

|-------------------------------------------------------------------------------
| The production config           https://maizzle.com/docs/building/#production
|-------------------------------------------------------------------------------
|
| This array contains the default Maizzle config for production. It's used
| when you do `npm run production` in the command line, and it will be
| merged on top of config.php.
|
*/

return [

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
                'backend' => [
                  [
                    'heads' => "{{",
                    'tails' => "}}",
                  ],
                ],
                'removeHTMLComments' => [
                    'enabled' => true,
                    'preserve' => ['if', 'endif', 'mso', 'ie'],
                ],
                'uglifyClassNames' => true,
            ],
            'keepOnlyAttributeSizes' => [
                'width' => ['TABLE', 'TD', 'TH', 'IMG', 'VIDEO'],
                'height' => ['TABLE', 'TD', 'TH', 'IMG', 'VIDEO'],
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

    'baseUrl' => '',
    'production' => true,
    'build' => [
        'source' => 'source',
        'destination' => 'build_production',
    ],
];

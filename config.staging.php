<?php

/*

|-------------------------------------------------------------------------------
| The staging config                 https://maizzle.com/docs/building/#staging
|-------------------------------------------------------------------------------
|
| This array contains the default Maizzle config for staging/testing. It's
| used when you do `npm run staging` in the command line, and it will
| be merged on top of your default config.
|
| These settings are tailored to email render testing and debugging.
| Output is similar to production, but with pretty indented code
| and no minification.
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
                'removeHTMLComments' => [
                    'enabled' => false,
                    'preserve' => ['if', 'endif', 'mso', 'ie'],
                ],
                'uglifyClassNames' => false,
            ],
            'keepOnlyAttributeSizes' => [
                'width' => ['TABLE', 'TD', 'TH', 'IMG', 'VIDEO'],
                'height' => ['TABLE', 'TD', 'TH', 'IMG', 'VIDEO'],
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

    'plaintext' => false,

    'baseUrl' => '',
    'production' => true,
    'build' => [
        'source' => 'source',
        'destination' => 'build_staging',
    ],
];

<?php

/*

Maizzle - Email Development Framework

A project by Cosmin Popovici (@cossssmin) and ThemeMountain (@thememountainco).

Welcome to the Maizzle config file. This is where you can customise some
Maizzle settings for your project.

View the full documentation at https://maizzle.com/docs


|-------------------------------------------------------------------------------
| The default config                   https://maizzle.com/docs/building/#local
|-------------------------------------------------------------------------------
|
| This array contains the default Maizzle settings for development. This is
| used when you run the `npm run dev` or `npm run watch` commands.
|
*/

return [

    /*
    |-----------------------------------------------------------------------------
    | Layout                                    https://maizzle.com/docs/layouts/
    |-----------------------------------------------------------------------------
    |
    | Define a master layout that all templates will extend by default.
    |
    | Maizzle comes with a default layout that sets various tags to
    | use settings from your config, but you can of course create
    | your own layouts and extend them at a template level,
    | with front matter.
    |
    */
    'extends' => '_layouts.master',

    /*
    |-----------------------------------------------------------------------------
    | Doctype                     https://maizzle.com/docs/configuration/#doctype
    |-----------------------------------------------------------------------------
    |
    | Define a doctype that will be used in the layout your emails extend.
    |
    | Maizzle defines an HTML 5 doctype by default, but you can choose
    | any doctype you need. You can also override it for each email,
    | through a front matter variable. If you use an empty string,
    | Maizzle's layouts will fallback to `html`.
    |
    */
    'doctype' => 'html',

    /*
    |-----------------------------------------------------------------------------
    | Language                   https://maizzle.com/docs/configuration/#language
    |-----------------------------------------------------------------------------
    |
    | This will be used in the `lang=""` attribute of the `<html>` tag. It helps
    | screen reader software use the correct pronunciation. Of course, you can
    | override it in each template, with front matter variables.
    |
    */

    'language' => 'en',

    /*
    |-----------------------------------------------------------------------------
    | Character set               https://maizzle.com/docs/configuration/#charset
    |-----------------------------------------------------------------------------
    |
    | Character encoding is set to UTF-8 by default. This prevents breaking
    | reading patterns by ensuring proper character rendering, both
    | on-screen and with screen readers.
    |
    */

    'charset' => 'utf8',

    /*
    |-----------------------------------------------------------------------------
    | Document title                https://maizzle.com/docs/configuration/#title
    |-----------------------------------------------------------------------------
    |
    | The `<title>` tag is needed in order to give screen reader users context.
    | It also helps when viewing the email in a browser (like your email's
    | online version), by setting the title on the browser's tab.
    |
    | You should specify a `title` key in the front matter for each email.
    |
    */

    'title' => '',

    /*
    |-----------------------------------------------------------------------------
    | Google Fonts           https://maizzle.com/docs/configuration/#google-fonts
    |-----------------------------------------------------------------------------
    |
    | This is where you can define which Google Fonts Maizzle should import.
    |
    | It will only import Google Fonts by adding a `<link>` tag to your HTML.
    | In order to use them, you still need to register the .font-{name}
    | class in the tailwind.js config file. Use as few fonts and
    | weights as possible, because it affects load time.
    |
    | Example:
    |
    | 'googleFonts' => [
    |    'Open+Sans:300,400,700',
    |    'Merriweather',
    | ],
    |
    */

    'googleFonts' => [],

    /*
    |-----------------------------------------------------------------------------
    | Screenshots                  https://maizzle.com/docs/building/#screenshots
    |-----------------------------------------------------------------------------
    |
    | This is where you can define which devices Puppeteer should emulate when
    | using the `screenshots` command in Maizzle. iPad Mini and iPhone 6 are
    | enabled by default, but you can use any of the device descriptors
    | supported by Puppeteer.
    |
    | It is recommended that you use as few devices as possible, as this
    | process launches Chrome in headless mode and, the more devices
    | you use, the more time it will take to generate screenshots.
    |
    | Note that these only emulate the viewport of a device, they are not
    | intended for email client render tests.
    |
    */

    'screenshots' => [
        'devices' => [
            'iPad Mini',
            'iPhone 6',
        ],
        'type' => 'png',
        'quality' => 100,
    ],

    /*
    |-----------------------------------------------------------------------------
    | Transformers           https://maizzle.com/docs/configuration/#transformers
    |-----------------------------------------------------------------------------
    |
    | This is where you can define various transformations that will be applied
    | to the output files. To speed up development, Maizzle disables most of
    | them for local development. They are, however, enabled in the
    | staging and production environment configs.
    |
    | Don't let the output file size scare you when working locally. Having
    | transformations disabled, you can reference any Tailwind CSS class
    | when debugging in-browser, and rapidly prototype your emails.
    |
    | Some of the advanced minifier options are not exposed here, but you
    | can customise them in tasks/js/after-jigsaw.js.
    |
    */

    'transformers' => [
        'baseImageURL' => '',
        'inlineCSS' => [
            'enabled' => false,
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
                'enabled' => false,
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
                'uglifyClassNames' => true,
            ],
            'keepOnlyAttributeSizes' => [
                'width' => ['TABLE', 'TD', 'TH', 'IMG', 'VIDEO'],
                'height' => ['TABLE', 'TD', 'TH', 'IMG', 'VIDEO'],
            ],
            'preferBgColorAttribute' => false,
        ],
        'prettify' => false,
        'minify' => [
            'minifyCSS' => false,
            'maxLineLength' => false,
            'preserveLineBreaks' => false,
            'collapseWhitespace' => false,
            'conservativeCollapse' => false,
            'processConditionalComments' => false,
        ],
        'sixHex' => false,
        'altText' => false,
    ],

    /*
    |-----------------------------------------------------------------------------
    | Plaintext                 https://maizzle.com/docs/configuration/#plaintext
    |-----------------------------------------------------------------------------
    |
    | When this option is set to true, Maizzle will generate a plaintext version
    | for every template. The .txt file will be placed in the same directory
    | as the HTML it's based on, and it will also have the same name.
    |
    */

    'plaintext' => false,

    /*
    |-----------------------------------------------------------------------------
    | BrowserSync             https://maizzle.com/docs/configuration/#browsersync
    |-----------------------------------------------------------------------------
    |
    | Tunnel
    |
    | When running the `watch` command with `tunnel` set to `true`, BrowserSync
    | will create a tunnel to your localhost, via localtunnel.me. You can
    | use this URL to share a live preview of what you're working
    | on with a colleague or a client.
    |
    | By default, setting it to `true` will generate a random localtunnel.me
    | subdomain. You can use a string instead, to have BrowserSync attempt
    | to use a custom subdomain.
    |
    | Directory listing
    |
    | Setting the `listing` option to `true` will enable a directory listing
    | when running the `watch` command, so you can browse through your
    | emails. You might want to set it to `false` when using the
    | tunnel option with a client.
    |
    */

    'browsersync' => [
        'tunnel' => false,
        'listing' => false,
    ],


    /*
    |-----------------------------------------------------------------------------
    | Helpers                     https://maizzle.com/docs/configuration/#helpers
    |-----------------------------------------------------------------------------
    |
    | Jigsaw config functions used by Maizzle in the build process.
    |
    */

    'googleFontsString' => function($page) {
        return collect($page->googleFonts)->transform(function($item, $key) {
            return str_replace(' ', '+', $item);
        })->implode('|');
    },

    /*
    |-----------------------------------------------------------------------------
    | Build defaults       https://maizzle.com/docs/configuration/#build-defaults
    |-----------------------------------------------------------------------------
    |
    | Configure additional Jigsaw build settings.
    |
    */

    'baseUrl' => '',
    'pretty' => false,
    'production' => false,
    'build' => [
        'source' => 'source',
        'destination' => 'build_local',
    ],
];

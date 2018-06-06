<?php

/*

Maizzle - Email Development Workflow

A project by Cosmin Popovici (@cossssmin).

Welcome to the Maizzle config file. This is where you can customise
some Maizzle settings for your project.

View the full documentation at https://docs.maizzle.com.


|-------------------------------------------------------------------------------
| The default config              http://jigsaw.tighten.co/docs/site-variables/
|-------------------------------------------------------------------------------
|
| This array contains the default Maizzle config for development. It's used
| when you do `npm run dev` in the command line.
|
| The production config is located in config.production.php, and will be
| merged on top of this one when doing `npm run production`.
|
*/

return [

    /*
    |-----------------------------------------------------------------------------
    | Layout          http://jigsaw.tighten.co/docs/blade-templates-and-partials/
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
    | Language                https://docs.thememountain.com/acorn/accessibility/
    |-----------------------------------------------------------------------------
    |
    | This will be used in the lang="" attribute of the <html> tag. It helps
    | screen reader software use the correct pronunciation. Of course,
    | you can override it in each template.
    |
    */

    'language' => 'en',

    /*
    |-----------------------------------------------------------------------------
    | Character set           https://docs.thememountain.com/acorn/accessibility/
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
    | Document title          https://docs.thememountain.com/acorn/accessibility/
    |-----------------------------------------------------------------------------
    |
    | The <title> tag is included in order to give screen reader users context.
    | It also helps when viewing the email in a browser (like your email's
    | online version), by setting the title on the browser's tab.
    |
    | You should specify a `title` key in the front matter for each email.
    |
    */

    'title' => 'Maizzle - Build HTML emails fast, with TailwindCSS and Jigsaw',

    /*
    |-----------------------------------------------------------------------------
    | Google Fonts               https://docs.thememountain.com/acorn/typography/
    |-----------------------------------------------------------------------------
    |
    | This is where you can define which Google Fonts Maizzle should import by
    | default. The examples show the correct syntax to use when importing
    | fonts with a space in their name, or with multiple weights. Use
    | as few fonts and weights as possible - it affects load time.
    |
    | Important:
    |
    | This will only import Google Fonts by adding a <link> tag to your HTML.
    | In order to use them, you still need to define the .font-{name}
    | classes in the tailwind.js config file.
    |
    */

    'googleFonts' => [
        'Open+Sans:300,400,700',
        'Merriweather',
    ],

    /*
    |-----------------------------------------------------------------------------
    | Output transformations
    |-----------------------------------------------------------------------------
    |
    | This is where you can define various transformations that will be applied
    | to the output files. By default, to speed up development, Maizzle
    | disables them for local development. They are, however, enabled
    | for staging and production builds.
    |
    | Don't let the output file size scare you when working locally. Having
    | transformations disabled, you can reference any TailwindCSS class
    | when debugging in-browser, and rapidly prototype your emails.
    |
    | Some of the advanced minifier options are not exposed here. If you
    | know what you're doing, you can change them in tasks/build.js.
    |
    */

    'transforms' => [
        'cleanup' => [
            'removeUnusedCss' => false,
            'removeTableWidthCss' => false,
            'preferBgColorAttribute' => false,
        ],
        'prettify' => false,
        'minify' => [
            'minifyHtml' => false,
            'minifyCss' => false,
            'maxLineLength' => 500,
        ],
    ],

    /*
    |-----------------------------------------------------------------------------
    | Helpers  http://jigsaw.tighten.co/docs/collections-variables-and-functions/
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
    | Jigsaw build defaults
    |-----------------------------------------------------------------------------
    |
    | Leave these alone unless you really know what you're doing.
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

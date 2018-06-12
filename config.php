<?php

/*

Maizzle - Email Development Workflow

A project by Cosmin Popovici (@cossssmin) and ThemeMountain (@thememountainco).

Welcome to the Maizzle config file. This is where you can customise some
Maizzle settings for your project.

View the full documentation at https://docs.maizzle.com.


|-------------------------------------------------------------------------------
| The default config              http://jigsaw.tighten.co/docs/site-variables/
|-------------------------------------------------------------------------------
|
| This array contains the default Maizzle config for development. This is
| used when you run the `npm run dev` command.
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
    | Google Fonts                              https://docs.maizzle.com/webfonts
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
    | Screenshots                            https://docs.maizzle.com/screenshots
    |-----------------------------------------------------------------------------
    |
    | This is where you can define which devices Puppeteer should emulate when
    | using the `screenshots` command in Maizzle. iPad Mini and iPhone 6 are
    | used by default, but you can choose any of the devices supported by
    | Puppeteer.
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
    | Output transformations                https://docs.maizzle.com/transformers
    |-----------------------------------------------------------------------------
    |
    | This is where you can define various transformations that will be applied
    | to the output files. By default, to speed up development, Maizzle
    | disables most of them for local development. They are, however,
    | enabled for staging and production builds.
    |
    | Don't let the output file size scare you when working locally. Having
    | transformations disabled, you can reference any TailwindCSS class
    | when debugging in-browser, and rapidly prototype your emails.
    |
    | Some of the advanced minifier options are not exposed here - you
    | can customise them in tasks/build.js.
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
          'enabled' => false,
        ],
    ],

    /*
    |-----------------------------------------------------------------------------
    | Helpers                             https://docs.maizzle.com/jigsaw/helpers
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

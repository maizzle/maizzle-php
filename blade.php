<?php

/** @var \Illuminate\View\Compilers\BladeCompiler $bladeCompiler */

/*
|-------------------------------------------------------------------------------
| BladeCompiler                    http://jigsaw.tighten.co/docs/content-blade/
|-------------------------------------------------------------------------------
|
| Here is where you can register Blade components, directives, and includes,
| so that you can reference them easier in your templates.
|
*/

/*
|-------------------------------------------------------------------------------
| @env
|-------------------------------------------------------------------------------
|
| Blade "if" directive that checks the current NODE_ENV. Use it to output
| content only when building for a certain environment. Note that the
| parameter must match the NODE_ENV as defined in package.json.
|
| Example:
|
| @env('development')
|    Show this if we do `npm run dev` or `npm run watch`
| @elseenv('production')
|    But when we do `npm run prod`, show this instead
| @endenv
|
*/

$bladeCompiler->directive('env', function ($env) {
    return "<?php if (getenv('NODE_ENV') == $env): ?>";
});

$bladeCompiler->directive('elseenv', function ($env) {
    return "<?php elseif (getenv('NODE_ENV') == $env): ?>";
});

$bladeCompiler->directive('endenv', function () {
    return '<?php endif; ?>';
});

/*
|-------------------------------------------------------------------------------
| @vmlbg
|-------------------------------------------------------------------------------
|
| Outlook VML background image component, that uses <v:image> to enable
| Windows 10 Mail support as well.
|
| Usage:
|
| @vmlbg(['src' => 'http://url.to/image.jpg', 'width' => 600, 'height' => 400])
    ... your HTML to be overlayed on top of the image
| @endvmlbg
|
*/

$bladeCompiler->component('_components.vmlbg');

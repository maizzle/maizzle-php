<?php

/** @var \Illuminate\View\Compilers\BladeCompiler $bladeCompiler */

/*
|-------------------------------------------------------------------------------
| BladeCompiler                                  https://docs.maizzle.com/blade
|-------------------------------------------------------------------------------
|
| Here is where you can register Blade components, directives, and includes,
| so that you can reference them easier in your templates. By default,
| we include an Outlook VML background image component, but you can
| register as many as you need.
|
*/

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

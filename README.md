# Jigsaw + Tailwind CSS Starter Kit

A starter kit for using the [Jigsaw](http://jigsaw.tighten.co/) static site generator with [Tailwind CSS](https://tailwindcss.com/).

## Features

- Webpack + Laravel Mix build system
- `tailwind.js` config file in root, customize as needed
- Uses `mix()` to fetch the CSS asset path and apply versioning
- Removes unused Tailwind CSS classes with [laravel-mix-purgecss](https://github.com/spatie/laravel-mix-purgecss) (production build only)
- Basic example of `@apply`ing Tailwind CSS classes. Useful when you write in Markdown and have no control over markup.

## Requirements

- PHP 7
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org) and NPM

## Getting Started

1. Clone this repo

2. Navigate to the folder

    ```sh
    cd jigsaw-tailwindcss
    ```

3. Install JS dependencies
    ```sh
    npm install
    ```
    
4. Install PHP dependencies
    ```sh
    composer install
    ```
    
5. Run the dev script to build the site

    ```sh
    npm run dev
    ```
    
To use Browsersync, run the watch script instead: `npm run watch`

**Note**: as mentioned, unused CSS will be removed *only* when you build for production: `npm run production`

## What is Jigsaw?

> A framework for rapidly building static sites using the same modern tooling that powers your web applications. - [Jigsaw](http://jigsaw.tighten.co/)

## What is Tailwind CSS?

> A Utility-First CSS Framework for Rapid UI Development - [Tailwind CSS](https://tailwindcss.com/)


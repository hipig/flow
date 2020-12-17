const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/alpine.js', 'public/js')
    .js('resources/vendor/quill/quill.js', 'public/vendor/quill')
    .postCss('resources/css/app.css', 'public/css', [
      require("tailwindcss"),
    ])
    .postCss('resources/vendor/quill/quill.css', 'public/vendor/quill', [
      require("tailwindcss"),
    ])
    .version();

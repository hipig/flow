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

// app
mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/alpine.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
      require("tailwindcss"),
    ]);

// quill
mix.js('resources/vendor/quill/quill.js', 'public/vendor/quill')
    .postCss('resources/vendor/quill/quill.css', 'public/vendor/quill', [
        require("tailwindcss"),
      ]);

// filepond
mix.js('resources/vendor/filepond/filepond.js', 'public/vendor/filepond')
    .postCss('resources/vendor/filepond/filepond.css', 'public/vendor/filepond', [
      require("tailwindcss"),
    ]);

// flatpickr
mix.js('resources/vendor/flatpickr/flatpickr.js', 'public/vendor/flatpickr')
  .postCss('resources/vendor/flatpickr/flatpickr.css', 'public/vendor/flatpickr', [
    require("tailwindcss"),
  ]);

mix.version();

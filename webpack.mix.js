const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.css("resources/css/app.js", "public/css");

mix.postCss("resources/css/main.css", "public/css", [
    require("autoprefixer"),
    require("tailwindcss")("./tailwind.config.js")
]);

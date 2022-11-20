// webpack.mix.js
let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'js')
.postCss("resources/css/app.css", "public/css/main.css", [
require("tailwindcss"),
]);
mix.browserSync('127.0.0.1:8000');

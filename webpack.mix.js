let mix = require('laravel-mix');
mix.webpackConfig({
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "resources/assets")
        }
    }
})

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

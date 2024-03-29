// webpack.mix.js

const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix
  .setResourceRoot('./')
  .setPublicPath('dist')
  .autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
  })

  .js('assets/js/main.js', 'js')
  //.js('assets/js/blog-ajax.js', 'js')
  //.js('assets/js/googleMaps.js', 'js')
  .sass('assets/sass/main.sass', 'css')
  .sass('assets/sass/admin-login.sass', 'css')
  .options({
    postCss: [ tailwindcss('./tailwind.config.js') ],
  })

  .browserSync({
    proxy: {
      target: "http://schoenegg.dig",
      ws: true
    },
    files: ["./**/*.php", "./dist/js/*.js", "./dist/css/*.css"]
  })
  .disableNotifications();
  

if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: "source-map"
    })
    .sourceMaps();
}

if (mix.inProduction()) {
  mix.version();
}
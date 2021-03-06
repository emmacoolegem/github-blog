let mix = require('laravel-mix');
let build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
    ]
});

mix.copy('source/_assets/img/**.*', 'source/assets/build/img');
mix.copy('source/_assets/fonts/**.*', 'source/assets/build/fonts');
mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts/**.*', 'source/assets/build/fonts');

mix.js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css')
    .options({
        processCssUrls: false,
    }).version();

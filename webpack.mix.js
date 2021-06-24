let mix = require('laravel-mix');
require('@ayctor/laravel-mix-svg-sprite');

mix.setPublicPath('public')
    .disableSuccessNotifications()
    .less('src/less/app.less', 'public/css')
    .options({
        processCssUrls: false
    })
    .js('src/js/jQuery.js', 'public/js')
    .js('src/js/index.js', 'public/js')
    .js('src/js/detail.js', 'public/js')
    .js('src/js/productList.js', 'public/js')
    .js('src/js/wishlist.js', 'public/js')
    .js('src/js/checkout.js', 'public/js')
    .copy(
        [
            'node_modules/lightgallery/dist/fonts/lg.ttf',
            'node_modules/lightgallery/dist/fonts/lg.woff',
        ],
        'public/fonts')
    .copy(
        [
            'node_modules/lightgallery/dist/img/loading.gif',
        ],
        'public/img'
    )
    .svgSprite('src/icons/**/*.svg', {
        output:  {
            filename: 'img/sprite.svg',
            chunk: {
                name: '/svg/sprite',
                keep: false
            },
            svgo: {
                plugins: [{
                    removeEmptyAttrs: false,
                    convertStyleToAttrs: true,
                    removeUselessStrokeAndFill: false,
                }],
            }
        },
        sprite: {
            prefix: 'sprite-',
        }
    });

mix.browserSync({
    proxy: 'signexpert.test',
    files: ['public/css/*.css', 'public/js/*.js', '**/*.php']
})

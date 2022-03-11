let mix = require('laravel-mix');

mix.sass('src/sass/index.scss', 'css/').sourceMaps()
    .ts('src/ts/index.ts', 'ts/').sourceMaps()
    .setPublicPath('dist')
    .browserSync({
        proxy: 'localhost',
        open: true,
    });

const mix = require('laravel-mix');
// var mix = require('laravel-mix')

// mix(function(mix){
//     mix.sass('app.scss');
// });

//mix.sass('resources/sass/blog.scss','public/css/app.css'); // este si anda pero me borra todo lo anterior

mix.js('resources/js/app.js', 'public/js')
// .sass('resources/sass/blog.scss','public/css/app.css')// anda pero me lo sobrescribe al ejecutar la linea de anajo
    .sass('resources/sass/app.scss', 'public/css');

    mix.browserSync('http://probar.test/'); // browsersync es para q recargue solo el navegador a la hora de cambiar  un estilo
                                            //comentar para q no ejecute si no se desea usar
                                            // se ejecuta con el watch
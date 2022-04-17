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
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.styles([
    'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
    'resources/assets/admin/css/adminlte.min.css',
    'resources/assets/admin/plugins/select2/css/select2.css',
    'resources/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'

], 'public/assets/admin/css/admin.css');

mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/admin/plugins/select2/js/select2.full.min.js',
    'resources/assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.js',
    'resources/assets/admin/js/adminlte.min.js',
    'resources/assets/admin/js/demo.js'

], 'public/assets/admin/js/admin.js');

//fonts
mix.copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts',
'public/assets/admin/webfonts' );

//images
mix.copyDirectory('resources/assets/admin/img', 'public/assets/admin/img' );

//maps file
mix.copy('resources/assets/admin/css/adminlte.min.css.map', 'public/assets/admin/css/adminlte.min.css.map')

mix.copy('resources/assets/admin/js/adminlte.min.js.map',
'public/assets/admin/js/adminlte.min.js.map');

 //front web style
mix.styles([
    'resources/assets/front/css/bootstrap.css',
    'resources/assets/front/css/font-awesome.min.css',
    'resources/assets/front/css/style.css',
    'resources/assets/front/css/animate.css',
    'resources/assets/front/css/responsive.css',
    'resources/assets/front/css/colors.css',
    'resources/assets/front/css/version/marketing.css'

], 'public/assets/front/css/front.css');

 //front web js scripts
mix.scripts([
    'resources/assets/front/js/jquery.min.js',
    'resources/assets/front/js/tether.min.js',
    'resources/assets/front/js/bootstrap.min.js',
    'resources/assets/front/js/animate.js',
    'resources/assets/front/js/custom.js',

], 'public/assets/front/js/front.js');

//front web fonsts
mix.copyDirectory('resources/assets/front/fonts', 'public/assets/front/fonts' );

//front web images
mix.copyDirectory('resources/assets/front/images', 'public/assets/front/images' );

//front web upload
mix.copyDirectory('resources/assets/front/upload', 'public/assets/front/upload' );



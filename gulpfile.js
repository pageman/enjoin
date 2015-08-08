var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');

    // Fonts
    mix.copy([
    		'bower_components/bootstrap/fonts/',
    		'bower_components/font-awesome/fonts/'
    	], 'public/fonts');

    // JS
    mix.copy([
    		'bower_components/jquery/dist/jquery.min.{js,map}',
    		'bower_components/bootstrap/dist/js/bootstrap.min.{js,map}'
    	], 'public/js/vendor');

});

// elixir(function(mix) {
//     mix.version(['public/css/app.css']);
// });
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
    mix.sass('app.scss');
    mix.styles([
     '../../../node_modules/jquery-ui/themes/base/all.css',
  	 '../../../public/css/app.css',
     '../../../node_modules/font-awesome/css/font-awesome.css',
     '../../../node_modules/selectize/dist/css/selectize.bootstrap3.css',
     '../../../node_modules/intl-tel-input/build/css/intlTelInput.css',
     '../../../node_modules/famfamfam-flags/dist/sprite/famfamfam-flags.css',
     '../../../node_modules/toastr/toastr.scss'
	], 'public/css/app.min.css')

	mix.scripts([
	  // '../../../node_modules/jquery/dist/jquery.js',
	  '../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
	  '../../../node_modules/selectize/dist/js/standalone/selectize.js',
	  '../../../node_modules/intl-tel-input/build/js/intlTelInput.js',
    '../../../node_modules/intl-tel-input/build/js/utils.js',
    '../../../node_modules/toastr/toastr.js',
    '../../../public/js/countries.js',
	  'app.js',
	], 'public/js/app.min.js')

	mix.copy('node_modules/font-awesome/fonts/', 'public/fonts/')
	mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/', 'public/fonts/')
});

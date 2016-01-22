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

var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

elixir(function(mix) {
	mix
		.browserSync({
			proxy : 'localhost:8000',
			files : [
				{
					match: ['public/assets/**/*']
				}
			]
		})

		.sass('app.scss', 'public/assets/css/app.css')

		.scripts([
			'app.js'
		], 'public/assets/js/app.js')

		.scripts([
			'jquery.min.js',
			'fastclick.js',
			'smoothscroll.js',
			'slick.min.js',
			'velocity.min.js',
		], 'public/assets/js/libs.js');
});
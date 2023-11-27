'use strict';

require( 'dotenv' ).config();

const gulp = require( 'gulp' );
const babel = require( 'gulp-babel' );
const sass = require( 'gulp-dart-sass' );
const rtlcss = require( 'gulp-rtlcss' );
const rename = require( 'gulp-rename' );
const browserSync = require( 'browser-sync' ).create();
const sourcemaps = require( 'gulp-sourcemaps' );
const environments = require( 'gulp-environments' );
const postcss = require( 'gulp-postcss' );
const postcssPresetEnv = require( 'postcss-preset-env' );

const development = environments.development;
const production = environments.production;

// Sass.
gulp.task( 'sass', function() {
	return gulp.src( [ 'src/sass/*.scss' ] )
		.pipe( development( sourcemaps.init() ) )
		.pipe( sass().on( 'error', sass.logError ) )
		.pipe( postcss( [
			postcssPresetEnv(),
		] ) )
		.pipe( development( sourcemaps.write( '.' ) ) )
		.pipe( gulp.dest( './' ) )
		.pipe( production( rtlcss() ) )
		.pipe( production( rename( { suffix: '-rtl' } ) ) )
		.pipe( production( gulp.dest( './' ) ) )
		.pipe( browserSync.stream() );
} );

// Script.
gulp.task( 'scripts', function() {
	return gulp
		.src( [ 'src/scripts/*.js' ] )
		.pipe( development( sourcemaps.init() ) )
		.pipe(
			babel( {
				presets: [ '@babel/env' ],
			} )
		)
		.pipe( development( sourcemaps.write( '.' ) ) )
		.pipe( gulp.dest( 'assets/js' ) );
} );

// Copy Images.
gulp.task( 'images', function() {
	return gulp.src( [ 'src/images/**/*.*' ] )
		.pipe( gulp.dest( 'assets/images' ) );
} );

// Copy Fonts.
gulp.task( 'font', function() {
	return gulp.src( [ 'src/fonts/**/*.*' ] )
		.pipe( gulp.dest( 'assets/fonts' ) );
} );

// Reload.
gulp.task( 'reload', ( cb ) => {
	browserSync.reload();
	cb();
} );

// Watch.
gulp.task( 'watch', function() {
	browserSync.init( {
		proxy: process.env.DEV_SERVER_URL,
		open: false,
	} );

	gulp.watch( 'src/sass/**/*.scss', gulp.series( 'sass', 'reload' ) );
	gulp.watch( 'src/scripts/**/*.js', gulp.series( 'scripts', 'reload' ) );
	gulp.watch( './**/*.php' ).on( 'change', browserSync.reload );
} );

// Tasks.
gulp.task( 'default', gulp.series( 'watch' ) );
gulp.task( 'build', gulp.series( 'sass', 'scripts', 'images', 'font' ) );

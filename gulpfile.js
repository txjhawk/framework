/**
 * Author: Anthony Allen
 * Description: Gulpfile: Compile SASS and minify CSS and auto prefix,
 * validate JS and minify files, Optimize images
 */

// Load plugins
var gulp     = require( 'gulp' ),
plugins      = require( 'gulp-load-plugins' )( { camelize: true } ),
sass         = require( 'gulp-ruby-sass' ),
autoprefixer = require( 'gulp-autoprefixer' ),
minifyCss    = require( 'gulp-minify-css' ),
notify       = require( 'gulp-notify' ),
jshint       = require( 'gulp-jshint' ),
concat       = require( 'gulp-concat' ),
rename       = require( 'gulp-rename' ),
uglify       = require( 'gulp-uglify' ),
cache        = require( 'gulp-cache' ),
imagemin     = require( 'gulp-imagemin' );

// Styles tasks
gulp.task( 'sass', function()
{
    return sass( 'public/scss/app.scss', { style: 'expanded', compass: true } )
        .pipe( autoprefixer( 'last 2 versions', 'ie 8', 'ie 9', 'ios 6', 'android 4', 'safari 5', 'opera 12.1' ) )
        .pipe( gulp.dest( 'public/css/' ) )
        .pipe( minifyCss( { keepSpecialComments: 1 } ) )
        .pipe( gulp.dest( 'public/css/' ) )
        .pipe( notify( { message: 'Styles task complete' } ) );
} );

// Site Scripts
gulp.task( 'scripts', function()
{
    return gulp.src( 'public/js/*.js' )
        .pipe( jshint( '.jshintrc' ) )
        .pipe( jshint.reporter( 'default' ) )
        .pipe( gulp.dest( 'public/js/' ) )
        .pipe( rename( { suffix: '.min' } ) )
        .pipe( uglify() )
        .pipe( gulp.dest( 'public/js/min/' ) )
        .pipe( notify( { message: 'Scripts task complete' } ) );
} );

// Images
gulp.task( 'images', function()
{
    return gulp.src( 'public/images/**/*' )
        .pipe( imagemin( { optimizationLevel: 7, progressive: true, interlaced: true } ) )
        .pipe( gulp.dest( 'public/images/' ) )
        .pipe( notify( { message: 'Images task complete' } ) );
} );

// Watch
gulp.task( 'watch', function()
{

    // Watch .scss files
    gulp.watch( 'public/scss/**/*.scss', [ 'sass' ] );

    // Watch .js files
    gulp.watch( 'public/js/**/*.js', [ 'plugins', 'scripts' ] );

    // Watch image files
    gulp.watch( 'public/images/**/*', [ 'images' ] );

} );

// Default task
gulp.task( 'default', [ 'sass', 'scripts', 'images', 'watch' ] );
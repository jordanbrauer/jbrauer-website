//--------------------------------------------------
// Plugins
//--------------------------------------------------
var gulp = require('gulp'),
    compass = require('gulp-compass'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del'),
    merge = require('merge-stream'),
    runseq = require('run-sequence');

//--------------------------------------------------
// Directory Variables
//--------------------------------------------------
/* source directory */
var $dir_src = './src',
    $dir_css_src = $dir_src + '/css',
    $dir_sass_src = $dir_src + '/sass',
    $dir_fonts_src = $dir_src + '/fonts',
    $dir_img_src = $dir_src + '/img',
    $dir_js_src = $dir_src + '/js';

/* public directory */
var $dir_public = './public_html',
    $dir_css_public = $dir_public + '/css',
    // $dir_sass_public = $dir_public + '/sass',
    $dir_fonts_public = $dir_public + '/fonts',
    $dir_img_public = $dir_public + '/img',
    $dir_js_public = $dir_public + '/js';

/* temporary files directory */
var $dir_temp = './.tmp';

/* test directory */
var $dir_test = './test';

/* foundation-sites directories */
var $dir_foundation = './node_modules/foundation-sites',
    $dir_sass_foundation = $dir_foundation + '/scss',
    $dir_js_foundation = $dir_foundation + '/js';
    $dir_dist_foundation = $dir_foundation + '/dist';
    $dir_vendor_foundation = $dir_foundation + '/vendor';

//--------------------------------------------------
// Fetching Tasks
//--------------------------------------------------

// get:foundation-sass
// -------------------
gulp.task('get:foundation-sass', function() {
  /**
   * 1) get all components except the main foundation.scss file.
   * 2) place them into a /foundation directory in /src.
   */
  var stream1 = gulp.src([
    '!' + $dir_sass_foundation + '/foundation.scss',
    $dir_sass_foundation + '/**/*'
  ]).pipe(gulp.dest($dir_sass_src + '/foundation'));

  /**
   * 1) get the main foundation.scss file.
   * 2) prepend a '_' to the file name to make the file a partial.
   */
  var stream2 = gulp.src($dir_sass_foundation + '/foundation.scss')
    .pipe(rename({prefix:'_'}))
    .pipe(gulp.dest($dir_sass_src + '/foundation'));

  /**
   * 1) merge streams.
   * 2) notify when the job is complete.
   */
  return merge(stream1, stream2)
    .pipe(notify({onLast: true, message: 'get:foundation-sass completed successfully.'}));
});

// get:foundation-js
// -----------------
gulp.task('get:foundation-js', function() {
  /**
   * 1) get the foundation javascript plugins.
   * 2) put the plugins into a /foundation/plugins directory within /src.
   */
  var stream1 = gulp.src($dir_dist_foundation + '/plugins/*')
    .pipe(gulp.dest($dir_js_src + '/foundation/plugins'));

  /**
   * 1) get the concatinated foundation javascript file.
   * 2) put the file into the /foundation directory within /src.
   */
  var stream2 = gulp.src($dir_dist_foundation + '/foundation.js')
    .pipe(gulp.dest($dir_js_src + '/foundation'));

  /**
   * 1) merge streams.
   * 2) notify when the job is complete.
   */
  return merge(stream1, stream2)
    .pipe(notify({onLast: true, message: 'get:foundation-js completed successfully.'}))
});

// get:foundation-vendor
// ---------------------
gulp.task('get:foundation-vendor', function(){
  /**
   * 1) get all foundation vendor scripts
   */
  var stream1 = gulp.src($dir_vendor_foundation + '/jquery/dist/jquery.min.js')
        .pipe(gulp.dest($dir_js_src + '/vendor/jquery')),
      stream2 = gulp.src($dir_vendor_foundation + '/modernizr/modernizr.js')
        .pipe(gulp.dest($dir_js_src + '/vendor/modernizr')),
      stream3 = gulp.src($dir_vendor_foundation + '/lodash/dist/lodash.min.js')
        .pipe(gulp.dest($dir_js_src + '/vendor/lodash')),
      stream4 = gulp.src($dir_vendor_foundation + '/jquery-placeholder/jquery.placeholder.js')
        .pipe(gulp.dest($dir_js_src + '/vendor/jquery-placeholder')),
      stream5 = gulp.src($dir_vendor_foundation + '/jquery.cookie/jquery.cookie.js')
        .pipe(gulp.dest($dir_js_src + '/vendor/jquery-cookie')),
      stream6 = gulp.src([
        $dir_vendor_foundation + '/jquery.autocomplete/dist/jquery.autocomplete.min.js',
        $dir_vendor_foundation + '/jquery.autocomplete/content/styles.css'
      ]).pipe(gulp.dest($dir_js_src + '/vendor/jquery-autocomplete'));

  /**
   * 1) create initial merged stream
   * 2) add remaining streams to inital merge.
   */
  var merged = merge(stream1, stream2);
  merged.add(stream3)
        .add(stream4)
        .add(stream5)
        .add(stream6);

  /**
   * 1) return the merged stream.
   * 2) notify when the job is complete.
   */
  return merged
    .pipe(notify({onLast: true, message: 'get:foundation-vendor completed successfully.'}));
});

gulp.task('get:foundation', function() {
  return runseq(
    'get:foundation-sass',
    'get:foundation-js',
    'get:foundation-vendor'
  );
});

//--------------------------------------------------
// Cleaning Tasks
//--------------------------------------------------
gulp.task('clean:public', function(){
  // delete all contents within public_html
});

gulp.task('clean:temp', function(){
  // delete all contents within .tmp
});

//--------------------------------------------------
// Style Tasks
//--------------------------------------------------
gulp.task('compile:styles', function() {
  // compile sass into css
  // minify compiled css
  // copy to public_html/css and src/css dirs
});

//--------------------------------------------------
// Font Tasks
//--------------------------------------------------
gulp.task('compile:fonts', function() {
  //copy fonts to public_html/fonts dir
});

//--------------------------------------------------
// Image Tasks
//--------------------------------------------------
gulp.task('compile:images', function() {
  // compress images
  // copy to public_html/img dir
});

//--------------------------------------------------
// Script Tasks
//--------------------------------------------------
gulp.task('compile:scripts', function() {
  // minify all js
  // concatinate into main.js file
  // copy to public_html/js and src/js dirs
});

//--------------------------------------------------
// Page Tasks
//--------------------------------------------------
gulp.task('compile:pages', function() {
  // minify html???
  // copy to public_html dir
});

//--------------------------------------------------
// Default Task
//--------------------------------------------------
gulp.task('default', function() {
  // place code for your default task here
});

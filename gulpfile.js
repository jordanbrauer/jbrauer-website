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
  // 1) get all components except the main foundation.scss file.
  // 2) place them into a /foundation directory in /src.
  var path1 = gulp.src([
    '!' + $dir_sass_foundation + '/foundation.scss',
    $dir_sass_foundation + '/**/*'
  ]).pipe(gulp.dest($dir_sass_src + '/foundation'));

  // 1) get the main foundation.scss file.
  // 2) prepend a '_' to the file name to make the file a partial.
  var path2 = gulp.src($dir_sass_foundation + '/foundation.scss')
    .pipe(rename({prefix:'_'}))
    .pipe(gulp.dest($dir_sass_src + '/foundation'));

  // 1) merge the paths into 1 path.
  // 2) notify when the job is complete.
  return merge(path1, path2)
    .pipe(notify({onLast: true, message: 'get:foundation-sass completed successfully.'}));
});

// get:foundation-js
// -----------------
gulp.task('get:foundation-js', function() {
  return gulp.src($dir_js_foundation)
    .pipe(gulp.dest($dir_js_src + '/foundation'))
    .pipe(notify({onLast: true, message: 'get:foundation-js completed successfully.'}));
});

gulp.task('get:foundation-all', function() {
  return runseq(
    'get:foundation-sass',
    'get:foundation-js'
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

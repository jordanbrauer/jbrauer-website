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
    del = require('del')
    merge = require('merge-stream')
    runseq = require('run-sequence');

//--------------------------------------------------
// Fetching Tasks
//--------------------------------------------------
gulp.task('get:foundation', function() {
  // fetch foundation assets from node_modules
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

/**
 * gulpfile.js
 * @author Jordan Brauer <jbrauer.inc@gmail.com>
 */

/** Load gulp, package (project) data, and plugin loader. */
const gulp = require('gulp');
const pkg = require('./package.json');
const plugins = require('gulp-load-plugins')({
  pattern: [
    'gulp-*',
    'gulp.*',
    'del',
    'merge-stream',
  ],
});

/**
 * @function uses({string} task)
 * @description Helper function for loading a tasks' script.
 */
const uses = (task) => {
  return require('./dev/tasks/' + task)(gulp, pkg, plugins);
}

gulp.task('fetch:foundation:styles', uses('fetchFoundationStylesTask.js'));

gulp.task('build:styles', uses('buildStylesTask.js'));

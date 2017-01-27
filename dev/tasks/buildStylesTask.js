/**
 * @function build:styles
 * @desc builds css from scss files.
 */

module.exports = (gulp, pkg, plugins) => {
  return () => {
    gulp.src(pkg.globs.src.styles)
      .pipe(plugins.sass({ outputStyle: 'expanded' })
      .on('error', plugins.sass.logError))
      .pipe(gulp.dest(pkg.paths.dist.styles));
  }
}

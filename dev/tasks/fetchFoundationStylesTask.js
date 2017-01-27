/**
 * @function fetch:foundation:styles
 * @description fetch the foundation-sites sass styles.
 */

module.exports = (gulp, pkg, plugins) => {
  return () => {
    gulp.src(pkg.globs.vendor.foundation.styles)
      .pipe(gulp.dest(pkg.paths.src.styles.foundation));
  }
}

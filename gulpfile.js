const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const reload = browserSync.reload;
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const notify = require('gulp-notify');
const cssunit = require('gulp-css-unit');

/* -------- Server  -------- */
gulp.task('server', function() {
  browserSync.init({
    proxy: "blogabs.loc/app/",
    open: false
  });

  gulp.watch('app/**/*').on('change', reload);
});


/* ------------ Styles compile ------------- */
gulp.task('styles', function () {
  return gulp.src('styles/main.sass')
    .pipe(sass({
      outputStyle: 'expanded'
    }).on('error', notify.onError()))
    .pipe(cssunit({
      type: 'px-to-rem',
      rootSize: 16
    }))
    .pipe(autoprefixer(['last 15 versions']))
    .pipe(gulp.dest('app/css'))
    .pipe(reload({
      stream: true
    }));
});

/* ------------ Watchers ------------- */
gulp.task('watch', function() {
  gulp.watch('styles/**/*.sass', gulp.series('styles'));
});

gulp.task('default', gulp.series(
  gulp.parallel('styles', 'watch', 'server')
  )
);


const gulp = require('gulp');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify');
const imagemin = require('gulp-imagemin');
const cleanCSS = require('gulp-clean-css');
var browserSync = require('browser-sync').create();

gulp.task('minify-css', () => {
  return gulp.src('app/dist/css/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('app/css'))
});

gulp.task('minify-js', () => {
  return gulp.src('app/dist/js/*.js')
    .pipe(uglify())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('app/js'))
});

gulp.task('all', () => {
  gulp.watch('app/dist/css/*.css', gulp.series('minify-css'));
  gulp.watch('app/dist/js/*.js', gulp.series('minify-js'));
});

gulp.task('img-compress', () => {
  return gulp.src('app/dist/img/*')
    .pipe(imagemin({
      verbose: true
    }))
    .pipe(gulp.dest('app/images/'))
});

gulp.task('browserSync', () => {
  browserSync.init({
    server: {
      baseDir: './app/'
    },
  })
});

gulp.task('dev', gulp.series('browserSync', 'minify-css', 'minify-js'), () => {
  gulp.watch('app/dist/css/*.css', gulp.series('minify-css'));
  gulp.watch('app/dist/js/*.js', gulp.series('minify-js'));

  gulp.watch('app/*.html', browserSync.reload);
  gulp.watch('app/dist/js/*.js', browserSync.reload);
});
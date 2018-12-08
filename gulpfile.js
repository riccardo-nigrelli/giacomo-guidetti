var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var cleanCSS = require('gulp-clean-css');
var rename = require("gulp-rename");
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');

gulp.task('minify-css', function () {
    return gulp.src('app/dist/css/*.css')
        .pipe(cleanCSS({
            compatibility: 'ie8'
        }))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('app/css/'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('minify-js', function () {
    return gulp.src('app/dist/js/*.js')
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('app/js/'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('browserSync', function () {
    browserSync.init({
        server: {
            baseDir: './app/'
        },
    })
})

gulp.task('compress-img', function () {
    gulp.src('app/dist/img/*')
        .pipe(imagemin({
            verbose: true
        }))
        .pipe(gulp.dest('app/images/'))
});

gulp.task('dev', ['browserSync', 'minify-css', 'minify-js'], function () {
    gulp.watch('app/dist/css/*.css', ['minify-css']);
    gulp.watch('app/dist/js/*.js', ['minify-js']);

    gulp.watch('app/*.html', browserSync.reload);
    gulp.watch('app/dist/js/*.js', browserSync.reload);
});


gulp.task('auto', function () {
    gulp.watch('app/dist/css/*.css', ['minify-css']);
    gulp.watch('app/dist/js/*.js', ['minify-js']);
});
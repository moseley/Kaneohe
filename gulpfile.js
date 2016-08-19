var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var rename = require('gulp-rename');
var cleanCSS = require('gulp-clean-css');
var gzip = require('gulp-gzip');
var livereload = require('gulp-livereload');
var sourcemaps = require('gulp-sourcemaps');

var gzip_options = {
    threshold: '1kb',
    gzipOptions: {
        level: 9
    }
};

gulp.task('sass', function() {
    return gulp.src('./sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({errLogToConsole: true}))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./'));
});

gulp.task('minify-css', function() {
    return gulp.src('./*.css')
        .pipe(gulp.dest('./'))
        .pipe(rename({suffix: '.min'}))
        .pipe(sourcemaps.init())
        .pipe(cleanCSS())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./'))
        .pipe(gzip(gzip_options))
        .pipe(gulp.dest('./'))
        .pipe(livereload());
});

gulp.task('watch', function() {
    livereload.listen();
    gulp.watch('./sass/**/*.scss', ['sass']);
});

gulp.task('default', ['watch', 'sass', 'minify-css']);
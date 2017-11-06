var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat');

gulp.task('css',function () {
    gulp.src('dev/scss/app.scss')
        .pipe(sass())
        .on('error', showError)
        .pipe(gulp.dest('./'))
});

gulp.task('js', function () {
    gulp.src('dev/js/**/*.js')
        .pipe(concat('pages.js'))
        .on('error', showError)
        .pipe(gulp.dest('./'))
});

gulp.task('default', ['css', 'js'], function () {
    gulp.watch(['dev/scss/**/*.scss'], ['css']);
    gulp.watch(['dev/js/**/*.js'], ['js']);
});

function showError(error){
    this.emit('end');
    console.log(error.toString());
}
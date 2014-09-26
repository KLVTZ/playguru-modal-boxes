var gulp   = require('gulp'),
	sass   = require('gulp-sass'),
	prefix = require('gulp-autoprefixer'),
	jsmin  = require('gulp-jsmin'),
	rename = require('gulp-rename');

gulp.task('default', function() {
	gulp.src('./fed/sass/*.scss')
		.pipe(sass())
		.pipe(prefix({keepSpecialComments: 0}))
		.pipe(gulp.dest('./fed/css'));
});

gulp.task('js', function(){
	gulp.src('./fed/js/main.js')
		.pipe(jsmin())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('./fed/js'));
});

gulp.watch('./fed/sass/*.scss', ['default']);
gulp.watch('./fed/js/*.js', ['js']);

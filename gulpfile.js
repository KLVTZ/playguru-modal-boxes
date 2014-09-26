var gulp = require('gulp'),
	sass = require('gulp-sass'),
	prefix = require('gulp-autoprefixer');

gulp.task('default', function() {
	gulp.src('./sass/*.scss')
		.pipe(sass())
		.pipe(prefix({keepSpecialComments: 0}))
		.pipe(gulp.dest('./css'));
});

gulp.watch('./sass/*.scss', ['default']);

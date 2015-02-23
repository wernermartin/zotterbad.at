

var gulp = require('gulp');
	uglify = require('gulp-uglify');
	watch = require('gulp-watch');
	concat = require('gulp-concat');
	minifycss = require('gulp-minify-css');
	copy = require('gulp-copy');
	connect = require('gulp-connect');

var outputDir = 'dist/';

gulp.task('js', function() {
  return gulp.src('js/*.js')
  .pipe(concat('all.min.js'))
  .pipe(uglify())
  .pipe(gulp.dest(outputDir));
});

gulp.task('css', function() {
	return gulp.src('src/css/*.css')
	.pipe(concat('all.min.css'))
	.pipe(minifycss({keepBreaks: true}))
	.pipe(gulp.dest(outputDir));
});

gulp.task('html', function() {
	return gulp.src('./*.html')
	.pipe(copy(outputDir));
});

gulp.task('reload', function () {
  gulp.src('./dist/*.html')
    .pipe(connect.reload());
});

gulp.task('connect', function() {
  connect.server({
    root: outputDir,
    livereload: true
  });
});


gulp.task('watch', function () {
	gulp.watch('src/css/*.css', ['css']);
	gulp.watch('src/js/*.js', ['js']);
	gulp.watch('*.html', ['html', 'reload']);
});

gulp.task('default', ['html', 'css', 'js', 'connect', 'watch']);


var gulp = require('gulp');
	uglify = require('gulp-uglify');
	watch = require('gulp-watch');
	concat = require('gulp-concat');
	minifycss = require('gulp-minify-css');
	copy = require('gulp-copy');
	connect = require('gulp-connect');

var outputDir = './dist/';

gulp.task('js', function() {
  return gulp.src('src/js/*.js')
  .pipe(concat('all.min.js'))
  //.pipe(uglify())
  .pipe(gulp.dest(outputDir));  
});

gulp.task('vendor', function() { 
	return gulp.src('./src/js/vendor/**/*.js', {base: './src/js/vendor'})
  	.pipe(gulp.dest(outputDir));
});

gulp.task('fonts', function() { 
	return gulp.src('./src/fonts/**/*.*', {base: './src/'})
  	.pipe(gulp.dest(outputDir));
});

gulp.task('img', function() { 
	return gulp.src('./src/img/**/*.*', {base: './src/'})
  	.pipe(gulp.dest(outputDir));
});


gulp.task('css', function() {
	return gulp.src('./src/css/*.css')
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
	gulp.watch('src/css/*.css', ['css', 'img', 'reload']);
	gulp.watch('src/js/*.js', ['js']);
	gulp.watch('*.html', ['html', 'img' , 'reload']);
	gulp.watch('*.jpg', ['img', 'reload']);
	gulp.watch('*.png', ['img', 'reload']);
});

gulp.task('default', ['html', 'css', 'vendor', 'fonts', 'img', 'js', 'connect', 'watch']);
// Require all packages
var gulp = require('gulp');
var less = require('gulp-less');
var minify = require('gulp-minify-css');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');
var livereload = require('gulp-livereload');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var csscomb = require('gulp-csscomb');

var onError = function (err) {
		notify({
				 title: 'Gulp Task Error',
				 message: 'Check the console.'
		 }).write(err);

		 console.log(err.toString());
		 
		 this.emit('end');
}

gulp.task('less', function() {

	return gulp
		.src('css/style.less')
		.pipe(plumber({ errorHandle: onError }))
		.pipe(less())
		.on('error', onError)
		.pipe(autoprefixer('last 1 version', "> 1%", "ie 10"))
		.pipe(minify())
		.pipe(csscomb())
		.pipe(gulp.dest('./'))
		.pipe(livereload())
		.pipe(notify({
			title   : 'Gulp Task Complete',
			message : 'Styles have been compiled'
		}));

});

// JS Concatination
gulp.task('js', function() {
	gulp.src([
		'js/vendor/swiper.js',
		'js/vendor/micromodal.js',
		'js/src/site.js'])
		.pipe(concat('main.js'))
		.pipe(uglify('main.js'))
		.pipe(gulp.dest('js/'))
		.pipe(notify({ message: 'JS Concatinated'}));
});

// Watcher
gulp.task('default', function() {
		gulp.watch('./css/project/*.less', ['less']);
		gulp.watch('./css/framework/*.less', ['less']);
		gulp.watch('./css/vendor/*.less', ['less']);
		gulp.watch('./css/*.less', ['less']);
		gulp.watch('./js/src/*.js', ['js']);
});

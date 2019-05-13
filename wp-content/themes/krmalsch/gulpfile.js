// ## Globals
var gulp, sass, concat, rename, cssNano, uglify;

gulp         = require('gulp');
sass         = require('gulp-sass');
concat       = require('gulp-concat');
rename       = require('gulp-rename');
cssNano      = require('gulp-cssnano');
uglify       = require('gulp-uglify');

// Don't kill gulp on error and tell us what's wrong
function swallowError (error) {
    console.log(error.toString());
    this.emit('end');
}


// Compile & Minify Sass/CSS
gulp.task('styles', function() {
    return gulp.src('sass/style.scss')
        .pipe(sass({outputStyle: 'expanded'}))
        .on('error', swallowError)
        .pipe(concat('dist/css/krmalsch.css'))
        .pipe(gulp.dest(''))
        .pipe(cssNano())
        .pipe(rename('dist/css/krmalsch.min.css'))
        .pipe(gulp.dest(''));
});

// Concatenate & Minify JS
gulp.task('scripts', function(){
	return gulp.src(['js/gallery.js', 'js/scroll-animate.js', 'js/jquery.magnific-popup.min.js', 'js/customizer.js', 'js/navigation.js', 'js/skip-link-focus-fix.js',])
		.pipe(concat('krmalsch.js'))
		.pipe(gulp.dest('dist/js/'))
		.pipe(uglify())
        .pipe(rename('krmalsch.min.js'))
		.pipe(gulp.dest('dist/js/'));
});


// Watch Task
gulp.task('watch', function() {
    gulp.watch(['scss/*.scss', 'scss/**/*.scss'], ['styles']);
    gulp.watch('js/*.js', ['scripts']);
});

// Default Task
gulp.task('default', ['styles', 'scripts']);

var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var historyApiFallback = require('connect-history-api-fallback');
var reload = browserSync.reload;
var paths = {
	// css: [
 //    'assets/css/*.css',
 //    'app/components/**/*.css'
 //  ],
  html: [
    '*.html',
    'app/components/**/*.html'
  ],
	js: [
    'app/*.js',
    'assets/js/*.js',
    'app/components/**/*.js',
    'app/services/*.js',
    '*.js'
  ],
  sass: [
    'assets/sass/**/*.scss',
    'app/components/**/*.scss'
  ]	
};
//Gulp Sass
gulp.task('sass', function () {
  gulp.src(paths.sass)
    .pipe(sass())
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.reload({stream: true}));
});
// //Gulp browerSync
gulp.task('server',function(){
	browserSync({
        notify: false,
        server: {
            baseDir: '.',
            middleware: [ historyApiFallback() ]
        }
    });
 	gulp.watch(paths.html, reload);
	gulp.watch(paths.js, reload);
	gulp.watch(paths.sass, ['sass']);
	
});

//Task default
gulp.task('default',[
  'sass',
	'server'
]);


var gulp 	= require('gulp');
var sass 	= require('gulp-sass');
var watch 	= require('gulp-watch');
var clean 	= require('gulp-clean');

// task para limpar CSS
gulp.task('clean:css', function(){
	return	gulp.src('css')
			.pipe(clean());
});

// task para o sass
gulp.task('sass', function(){
	gulp.src('sass/**/*.sass')
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
   	.pipe(gulp.dest('css'));
});

// task para o watch
gulp.task('watch', function(){
	gulp.watch('sass/**/*.sass', ['sass']);
});

//task default
gulp.task('default',['clean:css'], function(){
	gulp.start('sass', 'watch');
});
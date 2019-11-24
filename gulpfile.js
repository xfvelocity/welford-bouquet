const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const uglify = require('gulp-uglify-es').default;

// Copy All PHP files
gulp.task('copyPHP', () => {
  gulp.src('src/*.php').pipe(gulp.dest('dist'));
});

gulp.task('copyIncPHP', () => {
  gulp.src('src/inc/*.php').pipe(gulp.dest('dist/inc'));
});

gulp.task('copyCSS', () => {
  gulp.src('src/css/*.css').pipe(gulp.dest('dist/css'));
});

// Optimize Images
gulp.task('minIMG', () => {
  gulp
    .src('src/img/*')
    .pipe(imagemin())
    .pipe(gulp.dest('dist/img'));
});

// Scripts
gulp.task('minJS', () => {
  gulp
    .src('src/js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('dist/js'));
});

gulp.task('default', gulp.parallel(['copyPHP', 'copyIncPHP', 'copyCSS', 'minIMG', 'minJS']));

gulp.task('watch', () => {
  gulp.watch('src/js/*.js', ['minJS']);
  gulp.watch('src/img/*', ['minIMG']);
  gulp.watch('src/*.php', ['copyPHP']);
  gulp.watch('src/inc/*.php', ['copyIncPHP']);
  gulp.watch('src/css/*.css', ['copyCSS']);
});

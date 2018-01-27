var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    concat  = require('gulp-concat'),
    uglify  = require('gulp-uglify')

gulp.task('f4pjs', function() {
  //script one by one
    return gulp.src([
        'assets/js/jquery-library.js',
        'assets/js/materialize.js',
        'assets/js/slick.js',
        'assets/js/swiper.min.js',
        'assets/js/loadingoverlay.js',
        'assets/js/loadingoverlay_progress.js',
        'assets/js/jquery.lettering.js',
        'assets/js/equal-height.js',
        'assets/js/wow.js',
        'assets/js/jquery.swipebox.js',
        'assets/js/headroom.js',
        'assets/js/custom.js'
    ])
    .pipe(plumber())
    //made uglify
    .pipe(uglify())
    //made concat one by one
    .pipe(concat('f4p-min.js'))
    //send the minify file in the production folder
    .pipe(gulp.dest('assets/js/@f4pjs-production'));
});


// watch task started
gulp.task('watch', function(){
    gulp.watch('assets/js/*.js', ['f4pjs']);
});

// gulp default taskstart
gulp.task('default', [ 'f4pjs', 'watch' ]);

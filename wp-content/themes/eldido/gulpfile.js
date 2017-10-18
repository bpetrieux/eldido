var gulp = require('gulp');
var gulpStylus = require('gulp-stylus');
var postcss = require('gulp-postcss');
var lost = require('lost');
var cssnext = require('postcss-cssnext');
var precss = require('precss');
var cssnano = require('gulp-cssnano');
var rupture = require('rupture');
//reload
var browserSync = require('browser-sync');
var reload      = browserSync.reload;

//tools
var plumber    = require('gulp-plumber');

//min js
var concat = require('gulp-concat');  
var rename = require('gulp-rename');  
var uglify = require('gulp-uglify');  

gulp.task('browser-sync',['stylus'], function() {
  browserSync({
    proxy: "http://eldido.dev/",
      baseDir: "./",
    });
      gulp.watch("./stylus/*").on('change', reload);
      gulp.watch("./dest/*.css").on('change', reload);
      gulp.watch("./*.php").on('change', reload);
      gulp.watch('img/**/*').on('change', reload);
      gulp.watch('./js/*.js').on('change', reload);
  });

var paths = {
  stylusEntry: ["./stylus/*.styl"],
  stylusAll: ["./stylus/*.styl"]
};

gulp.task('stylus', function () {
  var processors = [
		lost,
		cssnext,
		precss
  ];
    var stylus_options = {
    use : [     
        rupture(),
    ]
  }
  return gulp.src('./stylus/style.styl')
  	.pipe(gulpStylus(stylus_options))
    .pipe(postcss(processors))
     .pipe(cssnano())
    .pipe(gulp.dest('./dest'))

});


var jsLibFiles = 'js/lib/*.js',
    jsFiles = 'js/scripts.js',  
    jsDest = 'dest/scripts';

gulp.task('libscripts', function() {  
    return gulp.src(jsLibFiles)
        .pipe(concat('libscripts.js'))
        .pipe(gulp.dest(jsDest))
        .pipe(rename('libscripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest));
});

gulp.task('scripts', function() {  
    return gulp.src(jsFiles)
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest(jsDest))
        .pipe(rename('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest));
});



gulp.task('watch', function(){
	gulp.watch(paths.stylusAll, ['stylus']);
});

gulp.task('default', ['watch','browser-sync']);
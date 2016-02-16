// --- INIT
var gulp = require('gulp'),
    less = require('gulp-less'), // compiles less to CSS
    minify = require('gulp-minify-css'), // minifies CSS
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'), // minifies JS
    rename = require('gulp-rename')
    sourcemaps = require('gulp-sourcemaps')
    
// Paths variables
var paths = {
    'dev': {
        'less': './bower_components/bootstrap/less/',
        'js': './bower_components/bootstrap/js/',
        'vendor': './bower_components/'
    },
    'assets': {
        'css': './../../assets/css/',
        'js': './../../assets/js/'
    }
};

// --- TASKS
// CSS frontend
gulp.task('less', function() {
  // place code for your default task here
  return gulp.src(paths.dev.less+'style.less') // get file
    .pipe(sourcemaps.init())
    .pipe(less())
    .pipe(gulp.dest(paths.assets.css)) // output: style.css
    .pipe(minify({keepSpecialComments:0}))
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write('/maps'))
    .pipe(gulp.dest(paths.assets.css)); // output: style.min.css
});

// JS frontend
gulp.task('js', function(){
  return gulp.src([
      paths.dev.vendor+'jquery/dist/jquery.js',
      paths.dev.vendor+'bootstrap/dist/js/bootstrap.js',
      paths.dev.js+'scripts.js'
    ])
    .pipe(concat('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest(paths.assets.js));
});

// --- WATCH
//Rerun the task when a file changes
gulp.task('watch', function() {
  gulp.watch(paths.dev.less + '*', ['less']);
  gulp.watch(paths.dev.js = '*', ['js']);
});

// --- DEFAULT
gulp.task('default', ['less', 'scripts']);

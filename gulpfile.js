const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function defaultTask(cb)
{
  return gulp.src('./partials/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
    cb();
};

exports.default = defaultTask

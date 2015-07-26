'use strict';

var gulp   = require('gulp');
var rename = require('gulp-rename');
var notify = require('gulp-notify');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var config = require('../config').scripts;

gulp.task('scripts', function() {
  return gulp.src(config.src)
    // .pipe(concat('main.js'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest(config.dest))
    .pipe(notify({ message: 'Scripts task completed' }));
});
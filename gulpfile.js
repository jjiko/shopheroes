'use strict';

var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var browserify = require('gulp-browserify');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var RevAll = require('gulp-rev-all');

// Shop Heroes DB
gulp.task('css', function () {
    gulp.src(__dirname + '/src/resources/assets/sass/shop-heroes.scss')
        .pipe(sass({errLogToConsole: true}))
        .pipe(autoprefixer('last 10 version'))
        .pipe(gulp.dest(__dirname + '/public/dist/css'));
});
gulp.task('js', function () {
    gulp.src(__dirname + '/src/resources/assets/js/shop-heroes.js')
        .pipe(browserify({
            debug: true,
            insertGlobals: true,
        }))
        .pipe(rename(__dirname + '/public/dist/js/app-shopheroes.js'))
        .pipe(gulp.dest('./'));
});
gulp.task('watch', function () {
    gulp.watch(__dirname + '/src/resources/assets/sass/**/*.scss', ['css']);
    gulp.watch(__dirname + '/src/resources/assets/js/**/*.js', ['js']);
});

gulp.task('publish', function() {
    var revAll = new RevAll();
    gulp.src(__dirname + '/public/dist/css/shop-heroes.css')
        .pipe(gulp.dest(global.public_dist + '/css'))
        .pipe(revAll.revision())
        .pipe(gulp.dest(global.public_dist + '/css'))
        .pipe(revAll.manifestFile())
        .pipe(gulp.dest(global.build_assets));

    gulp.src(__dirname + '/public/dist/js/app-shopheroes.js')
        .pipe(gulp.dest(global.public_dist + '/js'));
});
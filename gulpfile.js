const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
const cleanCSS = require("gulp-clean-css");


function style(){
    return gulp.src("./scss/**/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("./css"));
    }
    
    function prefixer(){
        return gulp.src('./css/style.css')
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(gulp.dest('./css'))
        .pipe(cleanCSS())
        .pipe(gulp.dest('./css'))
        .pipe(browserSync.stream());
}

function watchPHP(){
    browserSync.init({
        proxy:{
            target: "localhost:8888"
        }
    });
    gulp.watch("./scss/**/*.scss", gulp.series(style, prefixer))
    gulp.watch("./**/*.php").on("change", browserSync.reload);
    gulp.watch("./js/**/*.js").on("change", browserSync.reload);
}

function watchHTML(){
    browserSync.init({
        server:{
            baseDir: "./"
        }
    });
    gulp.watch("./scss/**/*.scss", gulp.series(style, prefixer))
    // gulp.watch("./css/**/*.css", prefixer)
    gulp.watch("./**/*.html").on("change", browserSync.reload);
    gulp.watch("./js/**/*.js").on("change", browserSync.reload);
}

exports.watchPHP = watchPHP;
exports.watchHTML = watchHTML;

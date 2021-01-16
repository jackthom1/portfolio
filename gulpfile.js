const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require("gulp-clean-css");
const imagemin = require("gulp-imagemin");
const browserify = require('browserify');
const babel = require('gulp-babel');
// const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const source = require('vinyl-source-stream');
const browserSync = require('browser-sync').create();



function style(){
    return gulp.src("./src/css/**/*.scss")
        .pipe(sass())
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(cleanCSS())
        .pipe(gulp.dest('./dist/css'))
        .pipe(browserSync.stream());
    }

function images(){
    return gulp.src('./src/images/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest('./dist/images'))
}

function compile(){
    let compileOne = gulp.src("./src/js/**/*.js")
    .pipe(babel({
        presets: ["@babel/preset-env"]
      }))
      .pipe(concat('index.js'))
      .pipe(gulp.dest('./dist/js'));
    let compileTwo = browserify('./dist/js/index.js')
    .bundle()
    .pipe(source('index.js'))
    .pipe(gulp.dest('./dist/js'))

    return compileOne, compileTwo;
}


function watchPHP(){
    browserSync.init({
        proxy:{
            target: "localhost:8888"
        }
    });
    gulp.watch("./src/css/**/*.scss", style);
    gulp.watch("./src/images/*", images)
    gulp.watch("./**/*.php").on("change", browserSync.reload);
    gulp.watch("./src/js/**/*.js", compile).on("change", browserSync.reload);
}

function watchHTML(){
    browserSync.init({
        server:{
            baseDir: "./"
        }
    });
    gulp.watch("./src/css/**/*.scss", style)
    gulp.watch("./src/images/*", images)
    gulp.watch("./**/*.html").on("change", browserSync.reload);
    gulp.watch("./src/js/**/*.js", compile).on("change", browserSync.reload);
}


function gulpExport(){
    return browserify('./dist/js/index.js')
    .transform('unassertify', { global: true })
    .transform('uglifyify', { global: true })
    .plugin('common-shakeify')
    .plugin('browser-pack-flat/plugin')
    .bundle()
    .pipe(require('minify-stream')({ sourceMap: false }))
}

exports.gulpExport = gulpExport;
exports.watchPHP = watchPHP;
exports.watchHTML = watchHTML;
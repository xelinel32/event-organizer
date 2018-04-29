var gulp = require("gulp"),
  sass = require("gulp-sass"),
  autoprefixer = require("gulp-autoprefixer"),
  cleanCSS = require("gulp-clean-css"),
  rename = require("gulp-rename"),
  browserSync = require("browser-sync").create(),
  concat = require("gulp-concat"),
  uglify = require("gulp-uglify");

gulp.task("browser-sync", ["css__scripts"], function() {
  browserSync.init({
    proxy: "colevents.com.ua",
    notify: false
  });
});
gulp.task("sass", function() {
  // Создаем таск "sass"
  return gulp
    .src(["sass/**/*.sass", "sass/**/*.scss"])
    .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
    .pipe(gulp.dest("app/css"));
});

gulp.task("css__scripts", function() {
  return gulp.src([
    "./app/css/fonts.css",
    "./app/css/main.css",
    "./app/css/media.css",
    "./app/css/hard_style.css",
    "./app/js/common.js"
  ]);
});

gulp.task("watch", function() {
  gulp.watch("app/libs/**/*.js", ["css__scripts"]);
  gulp.watch("app/js/*.js").on("change", browserSync.reload);
  gulp.watch("app/**/**/*.php").on("change", browserSync.reload);
  gulp.watch("app/**/**/*.html").on("change", browserSync.reload);
  gulp.watch("app/css/*.css").on("change", browserSync.reload);
  gulp
    .watch(["sass/**/*.sass", "sass/**/*.scss"], ["sass"])
    .on("change", browserSync.reload);
});

gulp.task("default", ["browser-sync", "watch"]);

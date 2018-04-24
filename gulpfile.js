var gulp = require("gulp"),
  sass = require("gulp-sass"),
  autoprefixer = require("gulp-autoprefixer"),
  cleanCSS = require("gulp-clean-css"),
  rename = require("gulp-rename"),
  browserSync = require("browser-sync").create(),
  concat = require("gulp-concat"),
  uglify = require("gulp-uglify");

gulp.task("browser-sync", ["scripts"], function() {
  browserSync.init({
    proxy: "colevents.com.ua",
    notify: false
  });
});
gulp.task("sass", function() {
  // Создаем таск "sass"
  return gulp
    .src(["sass/**/*.sass", "sass/**/*.scss"]) // Берем источник
    .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError)) // Преобразуем Sass в CSS посредством gulp-sass
    .pipe(gulp.dest("app/css")); // Выгружаем результата в папку css
});

gulp.task("scripts", function() {
  return gulp.src([
    "./app/css/fonts.css",
    "./app/css/main.css",
    "./app/css/media.css",
    "./app/css/hard_style.css"
  ]);
});

gulp.task("watch", function() {
  gulp.watch("app/libs/**/*.js", ["scripts"]);
  gulp.watch("app/js/*.js").on("change", browserSync.reload);
  gulp.watch("app/**/*.php").on("change", browserSync.reload);
  gulp.watch("app/**/*.html").on("change", browserSync.reload);
  gulp.watch("app/css/*.css").on("change", browserSync.reload);
  gulp
    .watch(["sass/**/*.sass", "sass/**/*.scss"], ["sass"])
    .on("change", browserSync.reload);
});

gulp.task("default", ["browser-sync", "watch"]);

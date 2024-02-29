import gulp from "gulp";
import postcss from "gulp-postcss";
import tailwindcss from "tailwindcss";
import autoprefixer from "autoprefixer";
import sourcemaps from "gulp-sourcemaps";
import cssnano from "cssnano";

function css() {
    return gulp
        .src("src/styles/*.css")
        .pipe(sourcemaps.init())
        .pipe(
            postcss([
                tailwindcss("./tailwind.config.js"),
                autoprefixer(),
                cssnano(),
            ])
        )
        .pipe(sourcemaps.write("."))
        .pipe(gulp.dest("dist/styles"));
}

function watch() {
    gulp.watch("src/styles/*.css", css);
}

export { css, watch };

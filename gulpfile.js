let project_folder = require('path').basename(__dirname);
let source_folder = '#source';

let path = {
    build: {
        html: project_folder + '/',
        css: project_folder + '/css/',
        script: project_folder + '/script/',
        images: project_folder + '/public/images/',
        icons: project_folder + '/public/icons/'
    },
    source: {
        html: [source_folder + '/*.html', '!' + source_folder + '/_*.html'],
        css: source_folder + '/scss/style.scss',
        script: source_folder + '/script/script.js',
        images: source_folder + '/images/**/*.{jpg,png,svg,ico,webp}',
        icons: source_folder + '/icons/*.svg'
    },
    watch: {
        html: source_folder + '/**/*.html',
        css: source_folder + '/scss/**/*.scss',
        script: source_folder + 'script/**/*.js',
        images: source_folder + '/images/**/*.{jpg,png,svg,ico,webp}',
        icons: source_folder + '/icons/*.svg'
    },
    clean: './' + project_folder + '/'
};

const {
    src,
    dest
} = require('gulp');
const gulp = require('gulp');
const browsersync = require('browser-sync').create();
const fileInclude = require('gulp-file-include');
const del = require('del');
const scss = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const groupmedia = require('gulp-group-css-media-queries');
const cleancss = require('gulp-clean-css');
const rename = require('gulp-rename');
const imagemin = require('gulp-image');
const uglify = require('gulp-uglify-es').default;
const babel = require('gulp-babel');


function browserSync(params) {
    browsersync.init({
        server: {
            baseDir: './' + project_folder + '/'
        },
        port: 3000,
        notify: false
    })
};

function html() {
    return src(path.source.html)
        .pipe(fileInclude())
        .pipe(dest(path.build.html))
        .pipe(browsersync.stream())
};

function css() {
    return src(path.source.css)
        .pipe(scss({
            outputStyle: "expanded"
        }))
        .pipe(groupmedia())
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 5 versions'],
            cascade: true
        }))
        .pipe(dest(path.build.css))
        .pipe(cleancss())
        .pipe(rename({
            extname: '.min.css'
        }))
        .pipe(dest(path.build.css))
        .pipe(browsersync.stream())
};

function script() {
    return src(path.source.script)
        .pipe(fileInclude())
        .pipe(dest(path.build.script))
        .pipe(
            uglify()
        )
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(
            rename({
                extname: '.min.js'
            })
        )
        .pipe(dest(path.build.script))
        .pipe(browsersync.stream())
}

function images() {
    return src(path.source.images)
        .pipe(imagemin())
        .pipe(dest(path.build.images))
        .pipe(browsersync.stream())
};

function icons() {
    return src(path.source.icons)
        .pipe(dest(path.build.icons))
        .pipe(browsersync.stream())

}

function watchFiles(params) {
    gulp.watch([path.watch.html], html)
    gulp.watch([path.watch.css], css)
    gulp.watch([path.watch.script], script)
    gulp.watch([path.watch.images], images)
    gulp.watch([path.watch.icons], icons)
};

function clean(params) {
    return del(path.clean);
};

const build = gulp.series(clean, gulp.parallel(css, html, script, images, icons));
const watch = gulp.parallel(build, watchFiles, browserSync);


exports.icons = icons;
exports.images = images;
exports.script = script;
exports.css = css;
exports.html = html;
exports.build = build;
exports.watch = watch;
exports.default = watch;
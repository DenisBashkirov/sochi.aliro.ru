const gulp = require('gulp');
const concat = require('gulp-concat');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const sourcemaps = require('gulp-sourcemaps');
const gulpif = require('gulp-if');
const argv = require('yargs').argv;
const debug = require('gulp-debug');
const rjs = require('gulp-requirejs');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');
const postcss = require('gulp-postcss');
const uncss = require('postcss-uncss');
const del = require('del');


sass.compiler = require('node-sass');


/*
VARS
 */

let env = {
    localUrl: 'http://hiloftdesign.prjv2', // Прописать локальный адрес проекта (для BrowserSync)
    watch: {
        styles: [
            './resources/sass/**/*.sass',
            './resources/sass/**/*.scss',
            './public/fonts/icons/style.scss'
        ],
        img: [
            './resources/img/**/*',
        ]
    },
    dest: {
        css: './public/css/'
    }

};


/*
FUNCTIONS
 */

let app = {
    sass: {
        common: [
            './resources/sass/*.sass'
        ],
        frontend: [
            './resources/sass/frontend/**/*.sass',
            './resources/sass/frontend/**/*.scss',
        ],
        backend: [
            './resources/sass/backend/**/*.sass',
            './resources/sass/backend/**/*.scss'
        ]
    }
};

app.compileStyles = function (paths, outputFileName) {
    return gulp.src(paths)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(concat(outputFileName + '.css'))
        .pipe(autoprefixer({
            cascade: true
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(env.dest.css))
};


gulp.task('styles', done => {

    app.compileStyles(
        app.sass.common.concat(app.sass.frontend),
        'frontend'
    );

    app.compileStyles(
        app.sass.common.concat(app.sass.backend),
        'backend'
    );

    done();

});


gulp.task('min-css-old', function () {
    return gulp.src(app.sass.common.concat(app.sass.frontend))
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('frontend.min.css'))
        .pipe(cleanCSS({level: 2}))
        .pipe(autoprefixer({
            cascade: true
        }))
        .pipe(gulp.dest(env.dest.css))
});


gulp.task('uncss-old', function () {

    let plugins = [
        uncss({
            html: [
                'http://okna.aliro.v2/',
            ],
            ignore: [
                /.is-active/,
                /.swiper*/,
                '.header--sticky',
                /.sx-/
            ]
        })
    ];

    return gulp.src('./public/css/frontend.min.css')
        .pipe(postcss(plugins))
        .pipe(gulp.dest('./public/css'));
});

gulp.task('build-css', gulp.series('min-css-old', 'uncss-old'));



gulp.task('del-img', done => {
    return del([
        './public/img/'
    ]);
});


gulp.task('img', done => {

    gulp.src(env.watch.img)
        .pipe(imagemin())
        .pipe(gulp.dest('./public/img/'))

    done();

});


gulp.task('webp', () =>
    gulp.src(env.watch.img)
        .pipe(webp())
        .pipe(gulp.dest('./public/img/'))
);


/*
TASKS
 */

gulp.task('watch', function () {

    /*browserSync.init({
        proxy: env.localUrl,
        notify: false
    });*/

    gulp.watch(
        env.watch.styles,
        gulp.series('styles')
    )
        //.on('change', browserSync.reload);
});

gulp.task('run', gulp.series('styles', 'watch'));


gulp.task('watch-img', function () {

    gulp.watch(
        env.watch.img,
        gulp.series('del-img', 'img', 'webp')
    )

});






gulp.task('sass', () => {
    return gulp.src(['./resources/sass/**/*.sass', './resources/sass/**/*.scss'])
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('main.css'))
        .pipe(gulp.dest('./public/css/'));
});



gulp.task('concat-css', () => {
    return gulp.src(['./public/css/main.css', './public/fonts/icons/style.css', 'public/libs/aos/aos.css', 'public/libs/fancybox/jquery.fancybox.css'])
        .pipe(concat('concat.css'))
        .pipe(gulp.dest('./public/css'));
});



gulp.task('uncss', () => {

    let plugins = [
        uncss({
            html: [
                'http://okna.aliro/',
                'http://okna.aliro/thanks',
            ],
            ignore: [
                /.is-active/,
                /.swiper*/,
                '.header--sticky',
                /.sx-/,
                /.aos*/,
                /.no-*/
            ]
        })
    ];

    return gulp.src('./public/css/concat.css')
        .pipe(postcss(plugins))
        .pipe(gulp.dest('./public/css'));
});

gulp.task('min-css', function () {
    return gulp.src('./public/css/concat.css')
        .pipe(cleanCSS({
            level: {
                1: {
                    normalizeUrls: false
                },
                2: {
                }
            }
        }))
        .pipe(autoprefixer({
            cascade: true
        }))
        .pipe(concat('concat.min.css'))
        .pipe(gulp.dest('./public/css'));
});


gulp.task('concat-uncss', gulp.series('concat-css', 'uncss'));


gulp.task('img-min', done => {
    gulp.src('./resources/img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./public/img/'))
    done();
});


gulp.task('webp', () =>
    gulp.src(['./public/img/**/*.jpg', './public/img/**/*.png'])
        .pipe(webp())
        .pipe(gulp.dest('./public/img/'))
);


/*
COMMANDS
 */

// gulp styles [--prod]
// компилирует .sass файлы в .css [в .min.css]

// gulp run [--prod]
// сперва копилирует .sass в .css, затем запускает виртульный сервер и наблюдатель .sass-файлов
// наблюдатель компилирует файлы стилей и обновляет страницу

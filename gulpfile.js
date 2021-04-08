//Declarações
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');


//Função para Compilar Sass
function compilarSass() {
    return gulp
        .src('styles/mystyles.scss')
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(autoprefixer({
            Browserslist: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.stream());
}


//Função para executar o SASS
gulp.task('sass', compilarSass);


//Função JS
function gulpJS() {
    return gulp.src([
        'scripts/tabs.js',
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/uikit/dist/js/uikit.min.js',
        'node_modules/uikit/dist/js/uikit-icons.min.js'])

        .pipe(concat('main.js'))
        .pipe(uglify('main.js'))
        .pipe(gulp.dest('assets/js'))
        .pipe(browserSync.stream());
}

//Função para Executar o JS
gulp.task('mainjs', gulpJS);

//Função para "Espionar as Alterações no Projeto"
function watchproject() {
    gulp.watch('styles/*.scss', compilarSass);
    gulp.watch('scripts/*.js', gulpJS);
    gulp.watch('*.php').on('change', browserSync.reload);
}

//Tarefa para iniciar o Watch
gulp.task('watch', watchproject);


//Tarefa padrão para executar o Gulp 
gulp.task('default', gulp.parallel('watch', 'sass', 'mainjs'));
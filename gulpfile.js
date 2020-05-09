var gulp         = require('gulp'),
		sass         = require('gulp-sass'),
		browserSync  = require('browser-sync').create(),
		concat       = require('gulp-concat'),
		uglify       = require('gulp-uglify-es').default,
		cleancss     = require('gulp-clean-css'),
		rename       = require('gulp-rename'),
		autoprefixer = require('gulp-autoprefixer'),
		rsync        = require('gulp-rsync'),
		newer        = require('gulp-newer'),
		responsive   = require('gulp-responsive'),
		del          = require('del');

// Local Server
gulp.task('browser-sync', function() {
	browserSync.init({
		server: {
			baseDir: 'app'
		},
		notify: false,
		// online: false, // Work offline without internet connection
		// tunnel: true, tunnel: 'projectname', // Demonstration page: http://projectname.localtunnel.me
	})
});
function bsReload(done) { browserSync.reload(); done() };

// Custom Styles
gulp.task('styles', function() {
	return gulp.src('flex/assets/sass/**/*.sass')
	.pipe(sass({
		outputStyle: 'expanded',
		includePaths: [__dirname + '/node_modules']
	}))
	.pipe(concat('main.min.css'))
	.pipe(autoprefixer({
		// grid: true, // Optional. Enable CSS Grid
		overrideBrowserslist: ['last 10 versions']
	}))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Optional. Comment out when debugging
	.pipe(gulp.dest('flex/assets/css'))
	.pipe(browserSync.stream())
});

// Scripts & JS Libraries
gulp.task('scripts', function() {
	return gulp.src([
		'flex/assets/libs/jquery/dist/jquery.min.js',
		'flex/assets/libs/jquery.validate.js',
		'flex/assets/libs/jquery.mask.min.js',
		'flex/assets/libs/jquery.popupoverlay.js',
		'flex/assets/libs/swiper/swiper.min.js',
		'flex/assets/libs/fancybox/jquery.fancybox.js',
		'flex/assets/libs/jquery.spincrement.min.js',
		'flex/assets/libs/animation/wow.min.js',
		'flex/assets/js/common.js', // Always at the end
		])
	.pipe(concat('scripts.min.js'))
	.pipe(uglify()) // Minify js (opt.)
	.pipe(gulp.dest('flex/assets/js'))
	.pipe(browserSync.reload({ stream: true }))
});

// Responsive Images
var quality = 95; // Responsive images quality

// Produce @1x images
gulp.task('img-responsive-1x', async function() {
	return gulp.src('flex/assets/img/_src/**/*.{png,jpg,jpeg,webp,raw}')
		.pipe(newer('flex/assets/img/@1x'))
		.pipe(responsive({
			'**/*': { width: '50%', quality: quality }
		})).on('error', function (e) { console.log(e) })
		.pipe(rename(function (path) {path.extname = path.extname.replace('jpeg', 'jpg')}))
		.pipe(gulp.dest('flex/assets/img/@1x'))
});
// Produce @2x images
gulp.task('img-responsive-2x', async function() {
	return gulp.src('flex/assets/img/_src/**/*.{png,jpg,jpeg,webp,raw}')
		.pipe(newer('flex/assets/img/@2x'))
		.pipe(responsive({
			'**/*': { width: '100%', quality: quality }
		})).on('error', function (e) { console.log(e) })
		.pipe(rename(function (path) {path.extname = path.extname.replace('jpeg', 'jpg')}))
		.pipe(gulp.dest('flex/assets/img/@2x'))
});
gulp.task('img', gulp.series('img-responsive-1x', 'img-responsive-2x', bsReload));

// Clean @*x IMG's
gulp.task('cleanimg', function() {
	return del(['flex/assets/img/@*'], { force: true })
});

// Code & Reload
gulp.task('code', function() {
	return gulp.src('flex/assets/**/*.php')
	.pipe(browserSync.reload({ stream: true }))
});

// Deploy
gulp.task('rsync', function() {
	return gulp.src('flex/assets/')
	.pipe(rsync({
		root: 'flex/assets/',
		hostname: 'username@yousite.com',
		destination: 'yousite/public_php/',
		// include: ['*.htaccess'], // Included files
		exclude: ['**/Thumbs.db', '**/*.DS_Store'], // Excluded files
		recursive: true,
		archive: true,
		silent: false,
		compress: true
	}))
});

gulp.task('watch', function() {
	gulp.watch('flex/assets/sass/**/*.sass', gulp.parallel('styles'));
	gulp.watch(['flex/assets/js/common.js'], gulp.parallel('scripts'));
	gulp.watch('flex/assets/*.php', gulp.parallel('code'));
	gulp.watch('flex/assets/img/_src/**/*', gulp.parallel('img'));
});

gulp.task('default', gulp.parallel('img', 'styles', 'scripts', 'browser-sync', 'watch'));

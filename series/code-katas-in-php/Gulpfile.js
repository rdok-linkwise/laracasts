var gulp = require('gulp');
var phpspec = require('gulp-phpspec');
var run = require('gulp-run');
var notify = require('gulp-notify');

gulp.task('test', function() {
        gulp
            .src('tests/unit/**/*.php')
            .pipe(phpspec('', { 'verbose': 'v', notify: true }))
            .on('error', notify.onError({
                title: "Failed!",
                message: "Make it work!",
                icon: __dirname + '/fail.png',
                urgency: 'critical'
            }))
            .pipe(notify({
                title: "Passed!",
                message: "Make it right!",
                urgency: 'critical',
                icon: __dirname + '/pass.png',
            }));
});

gulp.task('watch', function() {
        gulp.watch(['tests/unit/**/*.php', 'app/**/*.php'], ['test']);
});

gulp.task('default', ['test', 'watch']);

'use strict'

module.exports = function(grunt) {
    require('load-grunt-tasks')(grunt);

    var pkgJson = require('./package.json');
    var name = pkgJson.name;
    var version = pkgJson.version;

    grunt.initConfig({
        sass: {
            options: {
                sourceMap: true,
                outputStyle: 'compressed' //nested, expanded, compact, compressed
            },
            dist: {
                files: {
                    'dev/css/main.css': 'dev/sass/main.scss'
                }
            }
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src: ['dev/css/*.css'],
                },
                options: {
                    browser: 'google chrome',
                    proxy: 'sdb.dev',
                    watchTask: true,
                    ghostMode: true,
                    notify: false
                }
            }
        },
        watch: {
            compass: {
                files: 'dev/sass/**/*.scss',
                tasks: 'sass'
            }
        },
        copy: {
            release: {
                cwd: 'dev/',
                src: ['**', '!**/sass/**'],
                dest: 'releases/' + name + '-' + version + '/',
                expand: true
            },
            latest: {
                cwd: 'releases/' + name + '-' + version + '/',
                src: '**',
                dest: 'releases/latest/',
                expand: true
            }
        },
        clean: 'releases/' + name + '-' + version + '/**',
        uglify: {
            release: {
                files: {
                    'releases/latest/js/main.js': 'releases/latest/js/main.js'
                }
            }
        },
        cssmin: {
            target: {
                files: {
                    'releases/latest/css/main.css': 'releases/latest/css/main.css'
                }
            }
        }
    });

    grunt.registerTask('release', ['sass', 'clean', 'copy', 'uglify', 'cssmin', 'copy:latest']);
    grunt.registerTask('default', ['sass', 'browserSync', 'watch']);
};

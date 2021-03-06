/* global module, require */

/**
 * The Gruntfile
 */
module.exports = function (grunt) {
    'use strict';

    // Load all the grunt tasks
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        sass: {
            options: {
                unixNewlines: true,
                precision: 10,
                trace: true
            },
            dev: {
                options: {
                    style: 'nested',
                    sourcemap: 'auto'
                },
                files: [{
                    expand: true,
                    cwd: 'public/assets/scss',
                    src: ['**/*.scss'],
                    dest: 'public/assets/css',
                    ext: '-build.css'
                }]
            },
            dist: {
                options: {
                    style: 'compressed',
                    sourcemap: 'none'
                },
                files: [{
                    expand: true,
                    cwd: 'public/assets/scss',
                    src: ['**/*.scss'],
                    dest: 'public/assets/css',
                    ext: '-min.css'
                }]
            }
        },
        jshint: {
            options: {
                ignores: [
                    'public/assets/bower_components/**/*.js',
                    '**/*.min.js'
                ],
                jshintrc: true
            },
            files: {
                src: ['Gruntfile.js', 'public/assets/**/*.js']
            }
        },
        watch: {
            sass: {
                files: ['**/*.scss', '**/*.sass', '!public/assets/bower_components/**/*'],
                tasks: ['sass:dev']
            },
            scripts: {
                files: ['**/*.js', '!public/assets/bower_components/**/*'],
                tasks: ['jshint']
            }
        }
    });

    grunt.registerTask('default', ['sass:dev', 'jshint', 'watch']);
};

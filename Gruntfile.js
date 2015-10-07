module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
                dist: {
                    src: ['templates/acl-3.0/js/libs/*.js'],
                    dest: 'templates/acl-3.0/js/build/production.js',
                },

        },

        uglify: {
                build: {
                    src: 'templates/acl-3.0/js/build/production.js',
                    dest: 'templates/acl-3.0/js/production.min.js',
                },
        },

        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'templates/acl-3.0/css/build/global.css': 'templates/acl-3.0/css/global.scss'
                },
            },
        },

        watch: {
            scripts: {
                files: ['templates/acl-3.0/js/libs/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                },
            },
            css: {
                files: ['templates/acl-3.0/css/*.scss'],
                tasks: ['sass'],
                options: {
                    spawn: false,
                },
            },
        },

    });

    require('load-grunt-tasks')(grunt);

    grunt.registerTask('default', ['concat', 'uglify', 'sass', 'watch']);

};
module.exports = function (grunt) {
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                options: {
                    noCache: true,
                    style: 'compressed'
                },
                files: {
                    'public/css/styles.css': 'application/assets_src/scss/styles.scss',
                    'public/css/admin.css': 'application/assets_src/scss/admin/styles.scss'
                }
            }
        },

        uglify: {
            dist: {
                files: {
                    'public/js/scripts.min.js': [
                        'application/assets_src/js/aos.js',
                        'application/assets_src/js/cases.js'
                    ]
                }
            }
        },

        watch: {
            options: {
                interval: 5000
            },
            styles: {
                files: ['**/*.scss'],
                tasks: ['sass'],
                options: {
                    spawn: false
                }
            },
            scripts: {
                files: ['**/*.js'],
                tasks: ['uglify'],
                options: {
                    spawn: false
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('w', ['watch']);

};
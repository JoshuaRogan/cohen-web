sassFiles = {
    'public/style/style.css': 'resources/assets/sass/main.scss'
}

postcssFiles = {
    "public/style/style.min.css": ['public/style/style.css']
}

scriptOutput = 'public/js/app.min.js';
scriptFiles = {
    src: [
        'bower_components/jquery/dist/jquery.min.js',
        'bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        'bower_components/owl.carousel/dist/owl.carousel.min.js',
        'resources/assets/js/**/*.js',
        'resources/assets/js/main.js',

     ],
    dest: scriptOutput
}

module.exports = function(grunt) {

    grunt.initConfig({
        postcss: {
            prod: {
                options: {
                    map: {
                        inline: false, // save all sourcemaps as separate files...
                        annotation: 'resources/assets/sass/maps' // ...to the specified directory
                    },
                    // safe: true,
                    processors: [
                        // require('pixrem')(), // add fallbacks for rem units
                        require('autoprefixer')({
                            browsers: 'last 2 versions'
                        }), // add vendor prefixes
                        require('cssnano')(), // minify the result
                        require('cssnext')() // Plugins to use future CSS features now by adding backwards compatibility css processing
                    ]
                },
                files: postcssFiles
            },
            dev: {
                options: {
                    map: {
                        inline: false, // save all sourcemaps as separate files...
                        annotation: 'resources/assets/sass/maps' // ...to the specified directory
                    },
                    // safe: true,
                    processors: [
                        // require('pixrem')(), // add fallbacks for rem units
                        require('autoprefixer')({
                            browsers: 'last 2 versions'
                        }), // add vendor prefixes
                        require('cssnext')() // Plugins to use future CSS features now by adding backwards compatibility css processing
                    ]
                },
                files: postcssFiles
            }
        },
        sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: sassFiles
            }
        },
        uglify: {
            dist: {
                options: {

                },
                files: {
                    'public/js/app.min.js': [scriptOutput]
                }
            }
        },
        concat: {
            options: {
                separator: ';\n',
            },
            dist: scriptFiles,
        },
        watch: {
            configFiles: {
                files: ['Gruntfile.js', 'package.json'],
                options: {
                    reload: true
                }
            },
            styles: {
                files: 'resources/assets/sass/**/*.scss',
                tasks: ['sass:dist', 'postcss:dev'],
                options: {
                    nospawn: true
                }
            },
            scripts: {
                files: 'resources/assets/js/**/*.js',
                tasks: ['concat'],
                options: {
                    nospawn: true
                }
            },
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src: [
                        'public/**/*', 
                        'resources/views/**/*'
                    ]
                },
                options: {
                    watchTask: true,
                    proxy: "cohen.app"
                }
            }
        },
        copy: {
            files: {
                cwd: 'bower_components/font-awesome/fonts', // set working folder / root to copy
                src: '**/*', // copy all files and subfolders
                dest: 'public/fonts', // destination folder
                expand: true // required when using cwd
            }
        }
    });

    require('load-grunt-tasks')(grunt);
    grunt.registerTask('default', ['browserSync', 'watch']);
    grunt.registerTask('prod', ['sass:dist', 'postcss:prod', 'concat', 'uglify', 'copy']);
    grunt.registerTask('dev', ['sass:dist', 'postcss:dev', 'concat', 'uglify', 'copy']);
};
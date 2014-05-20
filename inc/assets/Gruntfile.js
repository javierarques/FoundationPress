module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        includePaths: [
            'bower_components/foundation/scss',
            require('node-bourbon').includePaths
        ]
      },
      dist: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'css/app.css': 'css/scss/app.scss'
        }        
      }
    },

    copy: {
      scripts: {
        expand: true,
        cwd: 'bower_components/',
        src: '**/*.js',
        dest: 'js/vendor'
      },

      maps: {
        expand: true,
        cwd: 'bower_components/',
        src: '**/*.map',
        dest: 'js/vendor'
      }
    },
    
    jshint: {
      all: ['Gruntfile.js', 'js/app/app.js']
    },


    uglify: {
      dist: {
        files: {
          'js/modernizr.min.js': [
              'js/vendor/modernizr/modernizr.js'
          ],
          'js/vendor/foundation/js/foundation.custom.min.js': [
              //'js/vendor/foundation/js/vendor/jquery.js',
              'js/vendor/foundation/js/foundation/foundation.js',
              'js/vendor/foundation/js/foundation/foundation.topbar.js',
              'js/vendor/foundation/js/foundation/foundation.offcanvas.js'
          ]
          /*
          'js/app/app.min.js': [
              'js/app/app.js'
          ],
          */
        }
      }
    },
    
    concat: {
      options: {
        separator: ';'
      },
      dist: {
        src: [
            'js/vendor/foundation/js/foundation.custom.min.js',
            'js/app/app.js'
        ],

        dest: 'js/app.min.js'
      }

    },

    watch: {
        grunt: { 
            files: ['Gruntfile.js'],
            tasks: ['concat']
        },

        js: {
            files: 'js/app/**/*.js',
            tasks: ['jshint', 'concat']
        },

        sass: {
          files: 'css/scss/**/*.scss',
          tasks: ['sass']
        }
    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');

  grunt.registerTask('build', ['sass']);
  grunt.registerTask('default', ['copy', 'uglify', 'concat', 'watch', 'jshint']);

};
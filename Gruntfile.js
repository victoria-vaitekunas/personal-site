module.exports = function(grunt) {
	//project config
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'css/new-scss/style.css': 'css/new-scss/style.scss'
                }
            }
        },
		autoprefixer: {
			options: {
				cascade: true,
				browsers: ['last 2 versions', '> 1%', 'Firefox >= 20']
			},
			single_file: {
				options: {
				},
				src: 'css/new-scss/style.css',
				dest: 'css/new-scss/style.css'	
			}
		},
		watch: {
			sass: {
			    files: ['css/new-scss/*.scss'],
			    //files: ['css/**/*.scss'],
			    tasks: ['sass'],
			    options: {
			    	livereload: true
			    }
			},
			autoprefixer: {
				files: ['css/new-scss/style.css'],
				tasks: ['autoprefixer']
			},
		}
	});
	//load the plugin
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-watch');
	//default tasks
	grunt.registerTask('default', ['sass','autoprefixer','watch']);
};
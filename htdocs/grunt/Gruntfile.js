module.exports = function(grunt){
    grunt.initConfig ({
        concat:{
            option:{
                seperator: ';',
            },
            dist:{
                src: ['fils/test.js','fils/test2.js'],
                dest: 'dist/app.js',
            },
        },
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.registerTask('default', ['concat']);
    grunt.registerTask('build', ['concat']);
};
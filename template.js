/**
 * grunt-wp-boilerplate
 * https://github.com/fooplugins/grunt-wp-boilerplate
 *
 * Copyright (c) 2013 Brad Vincent, FooPlugins LLC
 * Licensed under the MIT License
 */

'use strict';

// Basic template description
exports.description = 'Create a WordPress plugin!';

// Template-specific notes to be displayed before question prompts.
exports.notes = 'The generated plugin is based off the WordPress Plugin Boilerplate created by Tom McFarlin.';

// Template-specific notes to be displayed after the question prompts.
exports.after = 'Your plugin has been generated. Enjoy!';

// Any existing file or directory matching this wildcard will cause a warning.
exports.warnOn = '*';

// The actual init template
exports.template = function( grunt, init, done ) {
	init.process( {}, [
		// Prompt for these values.
		init.prompt( 'title', 'Plugin title' ),
        init.prompt( 'slug', 'Plugin slug / textdomain (no spaces)' ),
		init.prompt( 'description', 'An awesome plugin that does awesome things' ),
        {
            name: 'version',
            message: 'Plugin Version',
            default: '0.0.1'
        },
		init.prompt( 'homepage', 'http://wordpress.org/plugins' ),
		init.prompt( 'author_name' ),
		init.prompt( 'author_email' ),
		init.prompt( 'author_url' ),
        init.prompt( 'github_repo' )
	], function( err, props ) {

        props.safe_name = props.title.replace(/[\W_]+/g, '_');

		// Files to copy and process
		var files = init.filesToCopy( props );

        //delete a file if necessary :
        //delete files[ 'public/assets/js/public.js'];
		
		console.log( files );
		
		// Actually copy and process files
		init.copyAndProcess( files, props, {noProcess: 'assets/**' } );
		
		// Generate package.json file
		//init.writePackageJSON( 'package.json', props );
		
		// Done!
		done();
	});
};
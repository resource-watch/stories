<?php
// Theme css & js

function base_scripts_styles() {
	$in_footer = true;
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	wp_deregister_script( 'comment-reply' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply', get_template_directory_uri() . '/js/comment-reply.js', '', '', $in_footer );
	}

	// Loads JavaScript file with functionality specific.
	wp_enqueue_script( 'base-script', get_template_directory_uri() . '/js/jquery.main.js', array( 'jquery' ), '', $in_footer );

	if ( is_singular() ) {
		wp_enqueue_script( 'sharethis-script', 'http://w.sharethis.com/button/buttons.js', array(), '', $in_footer );
		wp_add_inline_script( 'sharethis-script', 'stLight.options({publisher:"12345"});' );
	}

	// font awesome icons
	wp_enqueue_style( 'fontawesome-fonts', 'http://fontawesome.io/assets/font-awesome/css/font-awesome.css', array() );

	// Lato font.
	wp_enqueue_style( 'lato-font', 'https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i', array() );

	// Fira Sans font.
	wp_enqueue_style( 'firaSans-font', 'https://fonts.googleapis.com/css?family=Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', array() );

	// Loads our main stylesheet.
	wp_enqueue_style( 'base-style', get_stylesheet_uri(), array() );
	
	// Implementation stylesheet.
	wp_enqueue_style( 'base-theme', get_template_directory_uri() . '/theme.css', array() );	
}
add_action( 'wp_enqueue_scripts', 'base_scripts_styles' );
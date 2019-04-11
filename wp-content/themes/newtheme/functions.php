<?php

function callStylesheets(){
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('styles', get_template_directory_uri() . '/sass/stylesheets/screen.css', array(), false, 'all');
	wp_enqueue_style('styles');

	wp_register_style('fontRoboto', 'https://fonts.googleapis.com/css?family=Roboto');
	wp_enqueue_style('fontRoboto');

	wp_register_style('fontAwesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('fontAwesome');

}
add_action('wp_enqueue_scripts', 'callStylesheets');

function callJquery(){
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.3.min.js', 1, true);
}
add_action('wp_enqueue_scripts', 'callJquery');

function callJS(){
	wp_register_script('customjs', get_template_directory_uri() .  '/js/scripts.js', '', 1, true);
	wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'callJS');

?>

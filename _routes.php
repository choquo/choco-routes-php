<?php 
/* 
* =====================================================================
* HOME
* =====================================================================
*/
if( is_homepage() ){
	
	include 'home.php';
	exit;

}

/* 
* =====================================================================
* ABOUT
* =====================================================================
*/
if( match_url('about') ){
	
	//Set variables before load your content
	$the_title			= 'About us';
	$the_description 	= 'This is a description for the about page';
	
	include 'about.php';
	exit;
}

/* 
* =====================================================================
* SERVICES: EXAMPLE WITH VARIABLES
* =====================================================================
*/
if( match_url('services/{str}/{int}') ){ //Try the regex online http://www.phpliveregex.com/p/eHz
	
	//Catch variables before load content

	//ID
	$id = get_param('services/{str}/{this}');
	
	//Slug
	$slug = get_param('services/{this}/{int}');

	include 'services.php';
	exit;
}


/*
* =====================================================================
* ERROR 404
* Do not remove anything below this line, keep this code at bottom.
* =====================================================================
*/
file_exists('404.php') ? include '404.php' : include 'core/defaults/errors/404.php';
?>
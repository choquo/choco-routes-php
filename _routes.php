<?php 
/* 
* =====================================================================
* HOME PAGE
* =====================================================================
*/
if( is_homepage() ){
	$the_title			= 'Bienvenido';
	$the_description 	= 'Esta es la descripcion';
	$the_keywords 		= 'Estas, Son, Las, Keywords';
	$the_fb_image 		= 'admin/uploads/page_algo/foto.jpg';
	include $theme_url.'/home.php';
	exit;
}


/* 
* =====================================================================
* EXAMPLE PROPERTIES
* =====================================================================
*/
//http://www.phpliveregex.com/p/eHz
if( match_url('/nomames/propiedades/{str}/{str}/{int}') ){
	echo '<h1>Propiedades</h1>';
	//Property ID
	$id = get_param('/nomames/propiedades/{str}/{str}/{this}');
	echo '<h4>Property ID: '.$id.'</h4><br>';
	exit;
}

/* 
* =====================================================================
* BLOG POST
* =====================================================================
*/
if( match_url('post/{str}/{int}') ){

	//Post Slug
	$slug = get_param('post/{this}/{int}');
	echo '<h4>Post Slug: '.$slug.'</h4><br>';
	
	//Post ID
	$id = get_param('post/{str}/{this}');
	echo '<h4>Post ID: '.$id.'</h4><br>';

	include $theme_url.'/post.php';
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
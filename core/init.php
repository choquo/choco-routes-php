<?php 
/**
* Define charset for plain-text outputs
* This doesn't have nothing to do with database utf, the database utf is set in admin/classes/DatabaseClass.php
*/
header('Content-Type: text/html; charset=utf-8');

//Load core files & config
require 'core/define-path.php';
require 'core/functions-built-in.php';

//Defaults
//Put your database user and password into admin/conex.php
$install_dirname 	= dirname($_SERVER['PHP_SELF']); //The dirname where app is running, this facilitate the change of the website folder without headaches, just move to another folder and your website will be ready automatically.

//Prepare routes
$requested_url_params = array();
$requested_url = str_replace($install_dirname, '', $_SERVER['REQUEST_URI']); //Remove install dirname to get the real requested url: domain-name-com/[this] or domain-name-com/installdirname/[this]
$requested_url_params = array_merge(array_filter(explode('/',$requested_url)));

//Load content
require '_routes.php';
?>
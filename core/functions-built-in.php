<?php 
/*
================================================================================================
┬─┐┌─┐┬ ┬┌┬┐┌─┐┌─┐  ┌─┐┌┐┌┌┬┐  ┬ ┬┬─┐┬  ┌─┐
├┬┘│ ││ │ │ ├┤ └─┐  ├─┤│││ ││  │ │├┬┘│  └─┐
┴└─└─┘└─┘ ┴ └─┘└─┘  ┴ ┴┘└┘─┴┘  └─┘┴└─┴─┘└─┘
================================================================================================
*/

function match_url($custom_url){
	global $requested_url;
	$custom_url = ltrim($custom_url,'/');
	$custom_url = '/'.$custom_url;
	$regexp = str_replace('/','\/', $custom_url);
	$regexp = str_replace('{str}', '.*', $regexp);
	$regexp = str_replace('{int}', '[0-9]', $regexp);
	$regexp = '/^'.$regexp.'+$/'; //http://www.phpliveregex.com/p/eHz
	if( preg_match($regexp, $requested_url) ){
		return true;
	}else{
		return false;
	}
}

function get_param($custom_url){
	global $requested_url;
	$custom_url = ltrim($custom_url,'/');
	$custom_url = '/'.$custom_url;
	$regexp = str_replace('/','\/', $custom_url);
	$regexp = str_replace('{this}', '(.*)', $regexp);
	$regexp = str_replace('{str}', '.*', $regexp);
	$regexp = str_replace('{int}', '[0-9]', $regexp);
	$regexp = '/^'.$regexp.'/'; //http://www.phpliveregex.com/p/eHz
	if( preg_match($regexp, $requested_url, $output) ){
		return $output[1];
	}else{
		return '';
	}
}

//Home page
function is_homepage(){
	global $requested_url_params; //This variable is declared at core/init.php
	if( empty( $requested_url_params ) && is_array( $requested_url_params ) ){
		return true;
	}else{
		return false;
	}
}

?>
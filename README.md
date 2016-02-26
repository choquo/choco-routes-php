# Choco Routes for PHP URL Friendly
A simple route system based in PHP for your website or projects

##Important Note

All your HTML pages must have defined the meta tag `base`, this example has a built-in variable to set this tag value dinamically. This meta tag helps mantain all your links working properly.

	<base href="<?php echo $base_href; ?>">

##Usage
Download files and open `_routes.php` custom your project routes and that's all.

###Matching URLS

Use the function `match_url()` to match url's and show your content.

####Show homepage

	if( is_homepage() ){
		include 'home.php';
		exit;
	}

####Show a single file

	if( match_url('contact-us') ){
		include 'contact.php';
		exit;
	}

####URL's with Parameters / Variables

Define your URL pattern, there is two possible values: `{str}` to match strings like slugs and `{int}` to match integers like ID's.

And for obtain the values in the URL use the function `get_param()` and use pattern `{this}` to indicate the script wich data you require.

	if( match_url('services/{str}/{int}') ){

		//ID
		$id = get_param('services/{str}/{this}');
		
		//Slug
		$slug = get_param('services/{this}/{int}');
	
		include 'services.php';
		exit;

	}

##License

This software is released under the MIT License.

Author: Carlos Maldonado @choquo.

You can use this code in commercial and open source projects, if you use this code for your projects just give me a mention and share this repo in your social networks.

2/26/2016 12:14:40 PM 
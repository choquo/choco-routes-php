# Choco Routes
#### Route System for URL Friendly with PHP
A simple route system based in PHP for your website or projects

## Important Note

All your HTML pages must have defined the meta tag `base`, this example comes with a built-in variable `$base_href` to set this tag value dinamically. This meta tag helps mantain all your links working properly.

	<base href="<?php echo $base_href; ?>">

## Usage
Download files and open `_routes.php` to custom your project routes.


## File "_routes.php"

### Matching URLS

Use the function `match_url()` to match url's and show your content.

#### Show homepage

	if( is_homepage() ){
		include 'home.php';
		exit;
	}

#### Show a single file

	if( match_url('contact-us') ){
		include 'contact.php';
		exit;
	}

#### URL's with Parameters / Variables

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

## Error 404
If you don't have a `404.php` file in your root folder the message of error will be taken from the default folder `core/defaults/errors/404.php`.

## License

This software is released under the MIT License.

Author: Carlos Maldonado @choquo.

You can use this code in commercial and open source projects, if you use this code for your projects just give me a mention and share this repo in your social networks.

2/26/2016 12:14:40 PM 

Required setup items:
[X] Add a "Home" and "Blog" page in WP backend
[X] Go into Settings > Reading and select "Static Page" for Front page and Posts page
[X] Change permalinks to custom: /blog/%postname%/ (this works correctly for all: posts, categories, tags, and pages)
[X] Show "Custom Fields" on page editor

[] Create front-page.php
[] Create header.php
[] Create footer.php
[] Create style.css

[] Create functions.php file and add:
	[] Post Thumbnails
	[] Custom Menus
	[] Sidebars
	[] Enqueue Scripts:
		[] JQuery
		[] Bootstrap JS script

[] Create page.php
[] Create sidebar.php
[] Create 404.php

[] Create index.php - template for /blog, /category, /tag - any Blog Post collection
[] Create single.php - template for single Blog Post

[] Activate plugin: Contact Form 7

SEO Items:
[] Identify 5-10 Keywords through Google Trends and AdWords keyword tool
[] Review site structure - https://yoast.com/blog-headings-structure/
[] Review page headings
[] Make HTML Sitemap - https://yoast.com/html-sitemap-wordpress/
[] Add Alt Tags to all images
[] Activate new property in Google Webmaster Tools

[] Activate plugin: "Wordpress SEO by Yoast"
	[] Set Title templates for page types - Keyword-heavy Title | Topic or Category | Site Title
	[] Write keyword-heavy Meta-Description for each page 
	[] Enable XML Sitemap in plugin settings
	[] Add Breadcrumbs to page.php and single.php, using plugin settings
	[] Disable Date-Based archives
	[] Disable Author archives
	[] No-index subpages of archives

Launch Items:
[] Upload favicon.ico to root URL and theme folder
[] Install plugin: Theme Check
[] Install plugin: W3 Total Cache

[] "No-JS" CSS class to style for users with Javascript disabled (menus, for example)
[] Set thumbnail sizes - large is way too large, size for subpages 	

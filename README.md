# Protect Kirby CMS
This plugin will help you to password protect any Kirby CMS page.

## How it works?
«Protect Kirby CMS» needs following components to work:

### assets/css/base.css
You can leave the CSS away. It contains the styling for the login form.

	/* Typography */
	
	body {
		color: #232323;	
		font-family: Georgia, "Times New Roman", Times, serif;
		line-height: 1.6em;
	}
	
	p {
		max-width: 698px;
		margin: 0 0 2.3em;	
	}
	
	h1, h2, h3, h4, h5, h6 {
		font-weight: normal;
		line-height: 1.41em;
		padding-bottom: 0.33em;
		padding-right: 0;
		padding-left: 0;
	}
	
	h1 {
		font-size: 2.5005em;
	}
	
	h2 {
		font-size: 1.667em;
	}
	
	h3, h4 {
		font-size: 1.25em;
	}
	
	/* Form Design */
	
	input[type=text], input[type=password] {
		border: 1px solid rgba(0, 0, 0, 0.2);
		-webkit-border-radius:0;
		-webkit-appearance:none;
		width: 100%;
		height: 1.667em;
		padding: 0;
		font: 1.667em Georgia, "Times New Roman", Times, serif;
	}
	
	input[type=submit] {
		background:#EEE;
		background:-moz-linear-gradient(top,#F7F7F7,#E6E6E6);
		background:-webkit-gradient(linear,left top,left bottom,from(#F7F7F7),to(#E6E6E6));
		border:solid .1em #666;
		border-radius:.3em;
		-moz-border-radius:.3em;
		-webkit-border-radius:.3em;
		cursor:pointer;
		font-size:90%;
		font-weight:700;
		height:2em;
		padding:0 .5em;
		text-shadow:#FFF 0 .1em 0;
		-moz-text-shadow:#FFF 0 .1em 0;
		-webkit-text-shadow:#FFF 0 .1em 0;
		margin-top: 0.5em;
	}
		
	input[type=submit]:hover {
		border-color:#222
	}

### content/protected-site/protect.txt
This file contains your site content. Naming it protect will load the protect.php template.

Username: //Your username
----
Password: //Your password
----

If you leave the password blank there will be no authentication needed.

### site/snippets/header.php
You can leave this file away and replace it with your own. It is just used for the demo so the necessary CSS files are loaded.

### site/snippets/protect.php
This snippet handles the complete password protection.

### site/templates/protect.php
This is the template for your password-protected site. Following code must be added on the first line:

	<?php
		if ($page->password() != '')
  		snippet('protect');
	?>

This will verify if you set a password in your content.txt file. If a password has been found it will display the login mask. If no password is present it will directly render the page.

## Disclaimers

### Credits
Please support humans.txt (http://humanstxt.org/). It's an initiative for knowing the people behind a website. It's a TXT file that contains information about the different people who have contributed to building the website.

	Protect Kirby CMS: https://github.com/niklausgerber/Protect-Kirby-CMS
	Niklaus Gerber
	Twitter: @niklausgerber
	URL: www.gerbers.ch
	Location: Bern, Switzerland	
	
### Licences
«Protect Kirby CMS» is licensed under a Creative Commons Attribution-ShareAlike 3.0 Unported License.
Based on a work at github.com.

### Download, Fork, Commit.
If you think you can make this better, please Download, Fork, & Commit. I'd love to see your ideas.
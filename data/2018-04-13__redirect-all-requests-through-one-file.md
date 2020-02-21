How to redirect all not existing content requests to a specific file in a directory.

--PAGE--

This is a quick snippet using .htaccess to redirect requests within a directory to a given file in that directory.

## Scenario
For a couple of projects  have been using the file structure as a routing method and needed all requests to be pointed to the index.php file, so


- /index.php
- /page.html
- /directory/page.html


Would all run through the root directories index.php

I opted to do this using a .htaccess file and use the mod_rewrite module for apache.

## Requirements
- mod_rewrite: http://httpd.apache.org/docs/current/mod/mod_rewrite.html

## Install mod_rewrite on Debian, Ubuntu

    sudo a2enmod rewrite

## Code
Create a file called .htaccess in the root directory of the website with the following contents.

    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ ./index.php [L,QSA]

## Explain

    RewriteEngine On // Turn on URL Rewriting
    RewriteCond %{REQUEST_FILENAME} !-f // Check If file does not exist
    RewriteCond %{REQUEST_FILENAME} !-d // Check If directory does not exist
    RewriteRule ^(.*)$ ./index.php [L,QSA] // Pass through to index.php  if above conditions passed

--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}

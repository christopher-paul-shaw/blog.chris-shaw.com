Redirecting a website from http to https or https to http.

--PAGE--
# Why Redirect to HTTPS?
It is generally best practice to enable https on websites to prevent third parties intercepting communications between the website and the visitor,
but even if https is enabled, its not forced enabling visitors to browse a website in a non protected manner.

To prevent this being an issue, we can make use of the ModRewrite within apache to detect if a website is using http rather than https and redrect to https.

## Force HTTP to HTTPS
Just add the following to the .htaccess file

    <IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{SERVER_PORT} !^443$
    RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
    </IfModule>

## HTTPS to HTTP
You can also direct the other way, although this is not advised.

    <IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{SERVER_PORT} ^443$
    RewriteRule ^(.*)$ http://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
    </IfModule>
    
---DATA--{"category":"snippet"}

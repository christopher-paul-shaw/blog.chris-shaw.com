VirtualHost template for directing all traffic on HTTP (Port 80) to HTTPS (443)
--PAGE--

To enable this functionality you will need the apache rewrite nodule *mod_rewrite* enabled on the server

    <VirtualHost *:80>
        ServerName example.com
        ServerAlias *.example.com
        RewriteEngine On
        RewriteCond %{HTTP_HOST} ^(.+)$
        RewriteRule ^(.*)$ https://%1$1 [R=302,L]
    </VirtualHost>

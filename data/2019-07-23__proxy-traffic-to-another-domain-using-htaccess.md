How to pipe all traffing from one domain to another one whilst not changing the visible domain
--PAGE--
**I am documenting this here as it was not apparent when researching this and took a while to find, hopefully this will make the answer more obvious for anyone needing it**

If you want to server content from one domain on another domain, this can be achieved using mod_rewrite rules in Apache.
This is done by using the [P] flag which enabled mod_rewrite to pass urls through to mod_proxy to another server.


## Example
The following example will pipe all traffic from www.example1.com/example/ to www.example2.com

    RewriteEngine On
    RewriteRule ^/?exmaple/(.*)$ http://www.example2.com/$1 [P]
    
    
--DATA--{"category": "snippet"}

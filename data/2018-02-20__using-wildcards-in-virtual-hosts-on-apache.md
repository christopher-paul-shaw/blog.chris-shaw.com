Virtual hosts in apache take incoming requests and point them to the correct directory. Here we will look into using wildcards to automate sub domains.

--PAGE--
For the more advance user this article will not be of much use, but when I first attempted this I did not find much information. This is documenting how I overcame this issue to help anyone facing this in the future.

# About Virtual Hosts
A virtual host refers to running more than one website from a single server, such as website1.server.com and website2.server.com. Virtual Hosts take the incoming address and map it to the location of the website on the server though.

In apache, virtual hosts are config files usually residing in        */etc/apache/sites-available/*

# What I wanted to do
I frequently have several projects going at a time, and where possible I tend to automate certain steps in the development cycle. As I currently have automated deployments to live, I wanted to replicate this for the branches into a test environment. 

A problem with this setup is that you need to create a virtual host for the website, and a permanent website such as https://www.chris-shaw.com, I don't have to worry about if the target domain exists when deploying, as I know it does.

For automatically deploying branches, these virtualhosts don't exist. I could automate branch x of repo y to deploy automatically, but would need to then have to manually create the virtualhost for https://x.y.chris-shaw.com which defeats the point of automation.

So, the problem I needed to fix was creating web addresses on the fly such as https://branch.project.testing.chris-shaw.com but there was not much out there to go on.

# A Dynamic Virtualhost
Rather than creating and destroying virtual hosts, I opted to go the route of having one dynamic virtual host that would map to directories depending on parameters passed. Although I thought it would be the best solution, I could not find much information on this.

I started off by using wildcards  * in the ServerName but to my frustration, I later found that wildcards could not be using in ServerName. But they could in ServerAlias 

    <VirtualHost *:80>
        ServerAlias *.chris-shaw.com
        VirtualDocumentRoot /var/www/%1/www/
    </VirtualHost>
             
Now using the above, I could map to anything in the www directory, but that became a complete headache and caused some major clutter on the server, and it only allowed one level such as https://reponame.chris-shaw.com

I eventually decided to keep all the branches and repos in a directory called dev, this kept the server cleaner but I still needed to access the repos via the domain


    <VirtualHost *:80>
        ServerAlias *.*.chris-shaw.com
        VirtualDocumentRoot /var/www/%2/%1/www/
    </VirtualHost>

Above now gives me the ability to have a two level subdomain, such as https://repo.dev.chris-shaw.com which worked well for showcasing projects and used this method for a while.

After a few months I needed to start doing the same with branches, but wanted to keep the current functionality intact. To do so I added a second virtual host in the same file and prioritised branches over repo only.

The following allows me to use both branch.https://repo.dev.chris-shaw.com and 
https://branch.repo.dev.chris-shaw.com 

    <VirtualHost *:80>
        ServerAlias *.*.*.chris-shaw.com
        VirtualDocumentRoot /var/www/%3/%2/%1/www/
    </VirtualHost>
    <VirtualHost *:80>
        ServerAlias *.*.chris-shaw.com
        VirtualDocumentRoot /var/www/%2/%1/www/
    </VirtualHost>

--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}

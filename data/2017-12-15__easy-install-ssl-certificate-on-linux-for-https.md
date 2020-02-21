Recently changed to having self hosted SSL Certificates thanks to LetsEncrypt. This is how easy it can be.
--PAGE--
As everything is gradually moving to the internet, it's becoming a haven for malicious people to steal and manipulate data to their own ends. One of the main ways to protect against this is by encrypting the information shared between your website, and the client. This can be achieved with SSL.


## What is SSL
>“SSL (Secure Sockets Layer) is the standard security technology for establishing an encrypted link between a web server and a browser. This link ensures that all data passed between the web server and browsers remain private and integral. SSL is an industry standard and is used by millions of websites in the protection of their online transactions with their customers.”
ssl.com


You can tell if a website is using SSL by the web address starting in https:// and by a lock icon being shown before the address. 

Until recently I used the SSL provided by the Content Delivery Network (CDN) cloudflare.
I thought it would be complicated to set this up locally, and as I was already using cloudflare I decided to use their option.

I had been using this offering for free for several years until I decided it was time to look further into hosting my own SSL Certificate, and to my surprise it was a lot easier to setup then I first anticipated.

**For this method you need SSH root access to your server. **
## Setting Up SSL
The following is intended for usage on Debian 9 using apache, the method may be slightly different so when prompted download the correct version for your system and setup.

### 1) Download Certbot
Certbot is a utility for signing SSL Certificates with LetsEncrypt, a service which provides SSL certificates for free.
You can download this from https://certbot.eff.org/ or on debian based systems the following command.

    sudo apt-get install python-certbot-apache 


### 2) Running Certbot
Certbot automates the installation of certificates on multiple platforms, and as it requires root privileges we need to run it using sudo.

In the snippet below we are telling the super user (root) to run certbot for the apache environment. This will automatically get the SSL Certificates and apply the required changes to the virtual

    sudo certbot --apache

Or if you would rather download just the certificate and manually edit the virtualhosts file, then pass the certonly option.

    sudo certbot --apache certonly

It will give you a list of sites to enable ssl for, just enter the numeric value for each and hit enter.

![Sites](https://www.chris-shaw.com/asset/images/articles/certbot-1-clean.PNG)

After retrieving the SSL Certificate, It will ask if you want the Easy or Secure option. It is best to use the Secure option and it will always force the user onto the encrypted version. 

![HTTPS Options](https://www.chris-shaw.com/asset/images/articles/certbot-2-clean.PNG)

### 3) Renewal
SSL Certificates are not permanent, they expire after a period of time. So we need to ensure that these are automatically updated. This is included within certbot.

To test the renewal, run the following test

     sudo certbot renew --dry-run
 
Once this has worked, you will need to setup a cron to run the following command at least once every three months.

    sudo certbot renew
 
--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}

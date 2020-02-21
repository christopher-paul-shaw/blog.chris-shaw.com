I recently wrote a similar article for Ubuntu, but here is how to install on Debian 8.

--PAGE--

**For installing PHP 7.2 see https://www.chris-shaw.com/blog/installing-php-7.2-on-debian-8-jessie-and-debian-9-stretch**

I found this week that I needed to upgrade my main server to PHP 7.1, after finding it would slighly different for Debian systems, it made sence to post another article.


To install php 7.1 on debian, we will be using [**Ondřej Surý**](https://packages.sury.org/php/), repository again, but this time the one for Debian rather than Ubuntu.


All we need to do is add the PPA Repository to Debian

## Adding this Repository to your system ##
You can update your system with packages from this PPA by adding ppa:ondrej/php to your system's Software Sources.

    apt-get install apt-transport-https lsb-release ca-certificates
    wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
    echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list
    apt-get update

## Installing PHP
Now as we have ondrej's PPA available as a source, we can go ahead and install PHP as we normally would with apt-get, we just need to specify the version we want to use.

    sudo apt-get install php7.1

# Installing Some Additional Packages
    sudo apt-get install php7.1-cli php7.1-common php7.1-curl php7.1-gd php7.1-json php7.1-mbstring php7.1-mysql php7.1-opcache php7.1-readline php7.1-xml

# Verify Install
To verify PHP7.1 is installed, just run the following to see the version you are using.
    
    php -v
    
--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}

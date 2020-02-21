Previously I wrote an article on how to install PHP 7.2 on Debian 8, since 7.2 is now available here is how to install 7.2

--PAGE--


This article is for installing PHP 7.2 on debian 8, if your looking to install 7.1 instead please look at https://www.chris-shaw.com/blog/how-to-install-php-7.1-on-debian-8.


Similar to 7.1, we will be using [**Ondřej Surý**](https://packages.sury.org/php/) repository to install the 7.2 version of PHP. This method works both on Debian 8 (Jessie) and Debian 9 (Stretch)

All we need to do is add the PPA Repository to Debian

## Adding this Repository to your system ##
You can update your system with packages from this PPA by adding ppa:ondrej/php to your system's Software Sources.

    sudo apt-get install apt-transport-https lsb-release ca-certificates
    sudo wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
    echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/php.list


## Installing PHP
Now as we have ondrej's PPA available as a source, we can go ahead and install PHP as we normally would with apt-get, we just need to specify the version we want to use.

    sudo apt-get update
    sudo apt-get install php7.2

# Installing Some Additional Packages
    sudo apt-get install php7.2-cli php7.2-common php7.2-curl php7.2-gd php7.2-json php7.2-mbstring php7.2-mysql php7.2-opcache php7.2-readline php7.2-xml

# Verify Install
To verify PHP7.2 is installed, just run the following to see the version you are using.
    
    php -v
    
    
# Enabling
You will need to enable for apache to use.

Disable old version, replace php5 with your old version

    a2dismod php5
    
Enable new 

    a2enmod php7.2

Restart Apache

    service apache2 restart

--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}

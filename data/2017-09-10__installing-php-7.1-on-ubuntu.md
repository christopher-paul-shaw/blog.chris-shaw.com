Ubuntu always lags behind with the software available in its repo's for security reasons, but if you need the latest version of PHP you need to look at other reputable repositories.

--PAGE--

To install php 7.1 on ubuntu, we need to turn to [**Ondřej Surý**](https://launchpad.net/~ondrej/+archive/ubuntu/php), who has been maintaining repositories allowing us to install more modern
versions of php for as long as I can remember.

All we need to do is add the PPA Repository to Ubuntu

## Adding this PPA to your system ##
You can update your system with packages from this PPA by adding ppa:ondrej/php to your system's Software Sources.

    sudo add-apt-repository ppa:ondrej/php
    sudo apt-get update


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

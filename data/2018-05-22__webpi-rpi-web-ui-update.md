As the WebPi UI is going to be a lighweight base for future projects, a small but important change has been made to the core code.
--PAGE-- 
Going forward basic functionality with the FileSystem will be handled within a new Entity class, which will contain basic create, update, search and delete features which will be extended by other class, this currently includes the User Class, responsible for all Accounts and Authentication.

# Upgrade

    git checkout master
    git pull
    composer update

# Upgrade to Release
If you want to stay with the current release only, then checkout the release.

    git checkout 1.0.2
    composer update
    
# Fresh Install

    git clone git@github.com:christopher-paul-shaw/WebPi.git && cd WebPi
    composer install

# Download
- https://github.com/christopher-paul-shaw/WebPi/archive/1.0.2.zip 
- https://github.com/christopher-paul-shaw/WebPi/archive/1.0.2.tar.gz

# Demo
URL: https://demo.webpi.chris-shaw.com/
Email: admin@web-pi
Password: password

--DATA--
{"category": "project", "author": "Christopher Shaw"}

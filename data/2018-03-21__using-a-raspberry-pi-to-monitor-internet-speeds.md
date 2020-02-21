When diagnosing internet and network connectivity, having a way to monitor issues over time is important. Here we will look at how to periodically log up and down speeds of the
network.

--PAGE--

Recently I did some work on my home network, and noticed how nthe internet speed varied drastically throughout the day and where in the house we were accessing it. 
After making some upgrades, I wanted to monitor if we now had a stable network when I was not in the house to monitor it myself.

To handle this task, I wanted to achieve the following
- Record results from either fast.com or speedtest.net to a log file
- To repeate the above at frequent intervals (10 mins)
- To have the results accessible a phone.

I had already decided I would use apache to serve the information, but for the actual heavy work of handling the speedtest I looked towards github and found a nice
shell script to handle most of the grunt.

Now following tutorial can be done on any linux operating system, but I decided to do this on a raspberry Pi for the following reasons. I will also be assuming you are using Raspbian
but it will work on any debian based distro.
- Low Power Usage
- Silent (Imprtant to me as I had it set up in the home office)

We will be using the speedtest script from https://git.io/speed , which was a godsend.

Due to the amounts of writes tis script will do, I would advise booting the rasperry Pi off a USB Drive.
For instructions check out https://www.chris-shaw.com/blog/booting-raspberry-pi-from-usb 

# 1) SSH Into your raspberry pi

    ssh user@raspberrypi

# 2) Install Apache
Any webserver will do,such as nginx, but I am writing this tutorial with apache in mind.
    
    sudo apt-get install apache2

# 3) Directory Permissions
By default only root users can write to the default web directory. So we need to change the permissions so pi is the owner, but www-data can access the files.

    sudo chown -R pi:www-data /var/www/

# 4) Open the web director 
	
    cd /var/www/html/

# 5) Download and apply executable permissions to the speedtest script

    wget https://git.io/speedtest.sh && chmod +x speedtest.sh

# 6) Creating the Cronjob
A cronjob automates the running of a script within unix like operating systems. 

    sudo crontab -e

add following line at the end of the file

    */10 * * * * /var/www/html/speedtest.sh >> speedtest.log

Now if you go to the IP of your raspbberry Pi, you can view the log file with the speedtests.

--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}

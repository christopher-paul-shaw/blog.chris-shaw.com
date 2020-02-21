Introducing Web Pi, the Web User Interface for interacting with your raspberry Pi.
--PAGE--
![Web Pi UI](https://webpi.chris-shaw.com/asset/WebUI.png)

Web Pi https://webpi.chris-shaw.com/ is a simple web application for the raspberry pi which logs the output of cronjobs that run in the background to files which it interrogates to output to the user. This is done due to the limited resources of the raspberry pi and to reduce loading times.

This application has been written in php framework https://www.php.gt 

## Why Was it Created
When working on my home network, users were reporting internet issues when I was not available to provide support, but a running theme was slow gaming. I suspected it was issues with the gaming networks such as PSN and over usage (streaming and gaming at the same time).

When users persisted that it was the internet, I set up a raspberry pi to frequently perform speed tests and log the results. As expected net speed on the connection was less than 50 mbits per second, the raspberry Pi would not be a bottleneck. After running for a few days, each time there was an issue, I was able to check the logs and diagnose any issues, which usually correlated with PSN being slow.

Although it did the job I needed, I wanted to open it up so other users could check the results without me giving them access to the server, hence I wrote the Web Pi to output the content to a browser, and gradually added more features.

## What Features Does it Have?
It currently contains the following, but as more needs are come across, or if any are requested, I will be adding more.
- User Authentication System (File Based)
- SpeedTest With Logs
- RPI Stats

## How to Install Using Git
1. Clone Repository

    git clone git@github.com:christopher-paul-shaw/WebPi.git && cd ./WebPi

2. Composer Install

    composer install
    
The website is served from the /www directory and cronjobs are stored within the /cron path.
You will need to enable cronjobs to run files in the cron directory at your desired times.

## Demo
There is a demo linked on the projects homepage https://webpi.chris-shaw.com/

URL: https://demo.webpi.chris-shaw.com/

Email: admin@web-pi

Password: password
 
--DATA--
{"category": "project", "author": "Christopher Shaw"}

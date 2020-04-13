A bash script to allow monitoring of downloads speeds.

--PAGE--

Using the following via a cronjob and echoing output to a file you can monitor your download speed over tiMe.
This is only a basic, crude test.

        #!bin/bash

        wget --output-document=/dev/null http://speedtest.wdc01.softlayer.com/downloads/test500.zip 2>&1| grep -o "[0-9.]\+ [KM]*B/s" |\
         (
            DATE=$(date +%Y-%m-%d-%H:%M:%S)
            while read LINE
            do
               echo "$DATE $LINE"
            done
         )

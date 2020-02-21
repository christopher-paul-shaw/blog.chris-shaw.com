Over the years I have found my way around many minor hurdles when using Ubuntu, the most recent being Using the **DELL ULTRAHD 4K USB 3.0 DOCKING STATION (D3100)**.

--PAGE--

![Dell d3100 Dock](http://i.dell.com/das/xa.ashx/global-site-design%20WEB/61026eee-7a6a-4724-3be9-032401cb328c/1/OriginalPng?id=Dell/Product_Images/Peripherals/Expansion/Dell/Docks_and_Stands/dell-docking-station-usb-3-hero-504x350.jpg)

I was issued one at work to allow me to hook 2 IPS monitors to my generic i5 laptop which only had one hdmi. Now for my co workers using windows, this was fairly simple. Where as I found it a little harder but mostly because of how hidden the drivers were.

# Problems I Experienced
- Screens coming and going as they pleased
- Wrong Resolutions
- Occasional Freeze

# DisplayLink Support
> Root cause for these problems have been identified as a result of the recent changes in X.org window system, which do not work with evdi correctly out of the box.
> 
Modesetting driver assumes page flips are not supported by devices using USB transport (e.g. udl - an opensource inbox driver for DisplayLink DL2 devices). However, evdi being a platform device, is not detected correctly by the logic in modesetting, and as a result page flipping is enabled for its screens."
>
Unfortunately, other parts of X are not yet ready to do page flip on PRIME slave outputs - c.f. the code in present:
These areas were changed just before releasing X from 1.18 and 1.19 branches - and the area is still being actively modified.
>
Page flipping is again allowed on PRIME slave outputs on trunk (not yet released) version of X.

Now I tried several different drivers suggested for Ubuntu, mainly from the display link wesbite, but it took a few days of hit and miss before I found out there was some hidden tweaks needed to rectify the issue. For my own reference, and for anyone experiencing this issue, here is how to remedy.

The file we are modifying is **20-displaylink.conf** which will most likely need creating.

1) Download the [Ubuntu Driver](http://www.displaylink.com/downloads/ubuntu) and install
2) Create the config file as root    

        sudo touch /usr/share/X11/xorg.conf.d/20-displaylink.conf
       
3) At the following section to the file

        Section "Device" 
          Identifier "Intel Graphics"
          Driver "intel"
        EndSection

4) Reboot

        sudo reboot

5) **If Problems persist, add the following to the file then reboot**

        Section "Device"
          Identifier "DisplayLink"
          Driver "modesetting"
          Option "PageFlip" "false"
        EndSection

--DATA--
{"category": "general", "author": "Christopher Shaw"}

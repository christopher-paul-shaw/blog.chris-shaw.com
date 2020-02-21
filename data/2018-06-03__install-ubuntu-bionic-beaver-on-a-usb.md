How to install Ubuntu 18.04 (Bionic Beaver) to a USB.

--PAGE--  

Ubuntu is one of the most popular and user friendly distributions of Linux, sporting a tweaked version of Gnome Shell as the default desktop environment.

Bionic Beaver is the latest LTS version of Ubuntu, LTS versions come every two years and are supported for five years after release.

Bionic Beaver will continue to receive security updates and critical bug fixes until April of 2023 making it an ideal candidate to rely on.

# Installing to a USB? 
Before we continue, we should point on the different ways of using USB Media for a linux distro.

-   Live USB: A Read Only version which boots into ram for testing and includes and installer to install to the computer's hard drive.

-   Persistent Live USB: Similar to above but contains a partition to save minimal changes / files

-   Linux On USB (Full Install USB): A full version installed to the USB instead of the Hard Drive.
    
In this article we will be creating a Full Install USB so we can use the USB as if we were booting it of a normal hdd. This allows us to save changes and use the OS in its normal fashion 

# Why would I want to do this?

I have used this method for several years with varying degrees of usage and found the following to be common benefits of this approach.

-   Portable: All I need is a computer to access, rather than carrying around a laptop.
    
-   Disposable: If it gets damaged, just create a new one
    
-   Recovery: Useful for fixing problems or just retrieving files from corrupted hard disks.
    
-   Reusable: Can repurpose older systems without needing a hard drive.
    
-   Testing: Can use as a test environment before using software on main machine.

# Warning  
Using a USB long term will eventually wear down and break the USB device, it is advisable to frequently make backups or use a USB External HDD Enclosure.  

# Installing to the USB 
  

** 1) Create Installation media**

Firstly we need to download the latest version of Ubuntu 18.04 at http://releases.ubuntu.com/18.04/
  
Once downloaded, we need to write it to a USB for us to boot from, dependent on your host OS you can follow one of the linked guides below.  
- https://www.chris-shaw.com/blog/creating-a-bootable-usb-on-linux  
- https://www.chris-shaw.com/blog/creating-a-bootable-usb-on-windows  
  
  
** 2) Disconnect the HDD**

This is optional but prevents any possibility of altering or corrupting the existing hard drive on the machine.

** 3) Insert the Installation Media and the Target USB device and boot the install media. ** 

When starting your computer you may need to access the boot menu, this different depending on the motherboard, but is usually one of the following keys (F2, F8, F10, F12)  

** 4) Run through the installation wizard **

When you are asked the installation type, choose “something else” and select the Target USB Device and continue with the installation. Once installed remove the installation media and reboot.

** 6) Choose the Target USB Device and continue with the install. **  

** 7) Reboot and boot from the target USB. **

** 8) Reconnect the Computers HDD if step 2 was taken. **

--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}

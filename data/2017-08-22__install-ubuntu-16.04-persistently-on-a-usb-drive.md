In this article we are going to cover how to install a linux distro to a USB Drive that allows you to use the usb drive as you would normally use the devices hard disk.

--PAGE--


![Ubuntu](https://www.tecmint.com/wp-content/uploads/2016/10/Select-Ubuntu-16.10-Installation-Type.png)

----

# Warning
Please note that doing the following **will reduce the lifespan of the USB device** you are using.  
As USB devces are relatively cheap, as long as you backup your important data, this can be an ideal solution.

If you requre this for a more long term usage or less prone to failure, then I would advise to replace the USB drive with a Hard Drive.
You can do this by using a 2.5 inch USB HDD Enclosure.

----

**Please note this is different to using liveUSB mode or Persistant USB**

The first time I did this, I looked at every forum and blog I could find but they all pointed at just a liveCD. Which at the time I wanted to use Ubuntu on my work laptop, without permission to install linux on the laptop, I needed a way to use linux, as if it was installed on the laptop. This is where I came to install linux directly on a usb.


# What I wanted
I have used this method for several years with varying degrees of usage and found the following to be common benefits of this approach.

- **Portable:** All I need is a computer to access, rather than carrying around a laptop.

- **Disposable:** If it gets damaged, just create a new one

- **Recovery:** Useful for fixing problems or just retrieving files from corrupted hard disks.

- **Reusable:** Can repurpose older systems without needing a hard drive.

- **Testing:** Can use as a test enviroment before using software on main machine. 

# Types of Install
Before we continue, we should point on the different ways of using USB Media for a linux distro.

- Live USB: A Read Only version which boots into ram for testing and includes and installer to install to the computer's hard drive.

- Persistent Live USB: Similar to above but contains a partition to save minimal changes / files

- Linux On USB: A full version installed to the USB instead of the Hard Drive.

In this article we will be creating a **Linux On USB** using Ubuntu 16.04, the latest lts version from ubuntu.


# Requirements
	
- 1 x USB Drive, Minimum 8GB

- 1 x Install Media (USB or Blank DVD)

# Steps to Take

1. Create the Install Media

   - Download the latest version of Ubuntu from [Ubuntu.com](https://www.ubuntu.com/download/desktop) 

  - Create LiveCD or LiveUSB
: [Windows Live CD](http://www.wikihow.com/Create-an-Ubuntu-Live-Cd)


1. Disconnect the HDD
This is optional but prevents any possibility of altering or corrupting the existing hard drive on the machine.


1. Insert the target usb device.


1. Insert and boot from the live installation media and run through the installation wizard, when asked the installation type, choose something else.


1. Choose the Target USB Device and continue with the install.

1. Reboot and boot from the target USB.

1. Reconnect the Computers HDD if step 2 was taken.

By now you will have a working Ubuntu Installaton on your usb device. You can use it exactly how you would if you installed it to the hard drive.

--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}

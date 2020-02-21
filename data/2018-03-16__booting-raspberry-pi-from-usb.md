Boot Raspberry Pi from USB

The standard way of using a Raspberry Pi is to run the OS from a micro sd card. The problem with this is that the SD Card has limited read and writes, which will cause the SD to fail in a short period of time, especially if you write to files frequently.
--PAGE--
This started to become a problem for me when was running a monitoring script which wrote to a file every 10 mins. After seeing SD Card failures I opted to move the OS to a USB and run off the usb just like you can on a full computer as detailed in https://www.chris-shaw.com/blog/install-ubuntu-16.04-persistently-on-a-usb-drive 


The following instructions are written with the intent of being carried out on windows, but the instructions are similar for all platforms but you may need to use different tools, for instance if I was to do this on Ubuntu I would use the Disks application for the formatting of the drives and UNetBootin to write to the USB and SD card.



## Downloads
- Raspbian Img : https://www.raspberrypi.org/downloads/raspbian/
- Rufus : https://rufus.akeo.ie/

### 1) Format the USB and SD Cards
Plug the USB drive into the PC and format to fat32. There are several ways to do this and you can find some of these in https://www.maketecheasier.com/format-usb-drives-windows-10/ 

The option I went for was to Open up File Explorer, right click the USB drive an Choose the Format option.

Repeat for the SD Card.

### 2) Install Raspbian onto the USB
Using Rufus pictured below, select the USB drive and load the img file for raspbian. When you click start it will begin writing the image to the usb. 

![Rufus](https://www.chris-shaw.com/asset/images/articles/rufus-raspbian.png)

### 3) Copy Files From USB to SD CARD
Using File Manager, drag the entire contents of the USB to the SD Card. 

### 4) Change Root Source
The trick to this method is during the boot process we need to change where the files for the OS are located. On the SD card will be a file called cmdline.txt which tells the pi where the files are.
In this file we need to change the following line

    root=/dev/mmcblk0p2

to

    root=/dev/sda2

At this point we need can insert the sd card and the usb drive into the raspberry pi and boot up.
It works but the storage is limited and not using the full capacity of the USB drive.

## Expand the File System
Following are the steps to expand the filesystem on the USB Drive

### 1) Login to the Rasberry Pi

    ssh pi@yourrasperrypi

### 2) Start Fdisk on sda2

    sudo fdisk /dev/sda

### 3) List out the partitions (will need this information later)
Press p to see the partitions, there should be two here.

### 4) Delete the Linux partition
Press d then the number of the partition, usually 2. 

### 5) Create a New Partition
- Press n for new partition
- Press p for primary
- Enter the partition number from above, in our case 2.
- Enter the Start size for the partition from step 3
- Enter the End size for the partition from step m3
- Reboot    `sudo reboot`

### 6) Resize the FileSystem

	sudo resize2fs /dev/sda2

At this point the USB drive will have access to its full capacity.
--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}

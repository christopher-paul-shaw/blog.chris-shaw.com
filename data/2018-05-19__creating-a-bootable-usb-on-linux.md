How to create a bootable USB drive from an iso file on linux.
--PAGE--
In 2018 media such as CD’s and DVD’s have almost died out, with USB drives holding more capacity and being produced relatively cheaply. This means it makes more sense and is better value to use USB drives in place of CD’s or DVD’s.

This article looks at how to create a bootable USB drives for various uses.

![Linux USB](https://static.makeuseof.com/wp-content/uploads/2011/11/liveusb-icon.jpg)

# What is a Bootable USB
A bootable USB is a USB attached media, which you can use as a boot device for a computer, this includes usb thumb drives and usb external hard drive enclosures.
* Having a bootable USB drive enables you to:
* Boot a Computer where there is no boot device or storage
* Recover a computer from an inoperable state
* Carry your computing environment with you
* Install Operating Systems such as Ubuntu and Windows 10
* Test operating systems before installing onto the computer
* There are also many other interesting and niche usages.

# How to do this?

## 1. GUI Tools
GUI Tools are programs which you run on your computer visually and are usually the easiest to use.

![UNetBootin](http://3.bp.blogspot.com/-6-gYreNkAQw/VTc7cCYo93I/AAAAAAAADD8/9oJ-7EmhlDI/s1600/Screenshot%2Bfrom%2B2015-04-22%2B00%3A52%3A00%2B1.png)

The simplest to use in my preference is UNetBootin (http://unetbootin.sourceforge.net/) which is available in most distributions. 

**All you need to do is:**
* Select the circle next to Diskimage

* Browse for the file using the … button

* Select Your Drive and click ok

## 2. Command Line
Using Command Line utilities is more complex but allows for more control of what you are doing and can get more information about what is happening.

### - Insert the USB
### - Find your disks path, (Usually it will be /dev/sdb1 but depends on what drives you have installed)
    
    sudo fdisk -l

### - Unmount the disk found above

    sudo umount /dev/sdb1

### - Using DD copy the .iso to the dsk
               
    sudo dd if=/path/to/yourfile.iso of=/dev/sd1 bs=4M && sync

### - Wait to complete then unplug
--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}

How to create a bootable USB drive from an iso file on windows.
--PAGE--
# What is a Bootable USB
A bootable USB is a USB attached media, which you can use as a boot device for a computer, this includes usb thumb drives and usb external hard drive enclosures.

Having a bootable USB drive enables you to:
- Boot a Computer where there is no boot device or storage
- Recover a computer from an inoperable state
- Carry your computing environment with you
- Install Operating Systems such as Ubuntu and Windows 10
- Test operating systems before installing onto the computer

There are also many other interesting and niche usages.

# How to do this
## 1. Download Rufus
Rufus is a tool for writing images to USB drives in windows, download the latest version from https://rufus.akeo.ie/downloads/ 

## 2. Obtain Your .iso File
Can be any .iso file you wish, for this example I will use the Ubuntu iso. Download the latest version from https://www.ubuntu.com/download/desktop 

## 3. Launch Rufus
When launching Rufus you will be greeted with the following small window.

![Rufus](https://www.chris-shaw.com/asset/images/articles/rufus.png)

- Device: Choose your Device from the first Dropdown
- Partition Scheme: Leave as the Default
- FileSystem: You can choose several filesystems but its most common to use NTFS in windows
- Cluster Size: Leave as default
- New Volume Label: Set a label, such as Boot USB
- Where it says Create Bootable disk using, make sure this is ticked and choose ISO Image from the drop down. Then click the CD Drive Icon to the right and browse for the .iso file.
- Then click start and it will write the iso file to the usb.

After a few moments the USB will be written, you can then boot off the USB by restarting the computer and selecting the USB as the boot device during the boot process.
--DATA-- {"category":"tutorial"}

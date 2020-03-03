How to add a swapfile to linux based system or vps.

--PAGE--

Swapfiles work as secondary memory when allocated ram is exhausted, Swap should never be less that 32MB.


1. Create a Swap File using the dd command (128M block size X 32 = 4GB SwapFile)

        sudo dd if=/dev/zero of=/swapfile bs=128M count=32

2. Set Permissions on the SwapFile

        sudo chmod 600 /swapfile

3. Make Swap Area
	
        sudo mkswap /swapfile
	
4.  Enable Swapfile
	
        sudo swapon /swapfile

5.  Confirm Enabled

        sudo swapon -s

6.  Add Swapfile to fstab to enable mount on boot

        sudo vi /etc/fstab
	
Append the following line 

	/swapfile swap swap defaults 0 0

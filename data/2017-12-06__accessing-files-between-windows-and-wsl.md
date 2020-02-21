When using Windows Subsystem for Linux, you might need to access one operating systems files within another. Lets work out both ways.

--PAGE--

# Accessing Windows Files in Linux
Ubuntu in WSL automatically mounts the windows drive of the host OS under 

    /mnt/c/

To make it more usable, I find its easier to symlink what directories you need to your linux home

For example

    ln -s "C:\Users\username\Projects" "\home\username\Projects"
    
# Accessing Linux Files in Windows
There has only been one reason I needed this, so I could use my ssh-key with MySQL Workbench.

The files for the Ubuntu install are located in the following

    C:\Users\<username>\AppData\Local\lxss

For Example, My SSH Key would be

    C:\Users\Chris\AppData\Local\lxss\home\chris\.ssh\id_rsa

--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}

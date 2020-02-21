One line command to download public keys from GitHub and Append them to the authorized_keys file for simple server access

--PAGE--

When working on multiple servers from multiple machines, it can sometimes be a little of a chore to keep ssh keys up to date.

Normally if you connected to a machine, you would copy your public ssh key over once using the ssh-copy-id command, enter your password then the next time you ssh in 
you dont need to use the password.
    
    ssh-copy-id user@server.com
    
This is a simple tool, but when theres lots of servers, it makes sence to have one true source of ssh keys. 
Since most developers use github, we can copy the publicly accessible keys and append to the authorized_keys file.

This means we can do the task easily, and authorize all devices we use for development on the on the current server

From your home directory run the following:

    curl https://github.com/{github-username}.keys >> .ssh/authorized_keys
    
This does a curl request to get the keys from github, and appends them to the authorized_keys file

--DATA-- {"category":"snippet"}

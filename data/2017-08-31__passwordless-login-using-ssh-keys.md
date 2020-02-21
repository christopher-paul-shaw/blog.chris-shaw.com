Here we look at how to generate SSH Keys and Copy them to servers to enable secure but pass-wordless login.

--PAGE-- 

Its good practice to use difference passwords for each login you have, and when it comes to Sever Login this is just as important, but having too many passwords can be confusing.
Instead, its best to use authorised SSH Keys which the server will remember, so each time you login from your current computer, it already knows its you.


# Generating the SSH Key
For anyone familiar with git repositories, you probably already know this step. But for those new to SSH Keys we need to generate a private / public pair of keys.

To Generate an SSH Key

    ssh-keygen

You will be asked several questions such as path and passphrase, you can just enter through these and leave them, as default.
The keys will then be stored under your home directory in the .ssh folder.

# Viewing the SSH Key
If you want to view the Key you can do so with cat

    cat ~/.ssh/id_rsa.pub

# Copying the Key to the server
    ssh-copy-id -i ~/.ssh/id_rsa user@host

# Testing
Attempt to log into the server
    
    ssh user@host

# HOW SSH-COPY-ID WORKS
ssh.com:
     
>**ssh-copy-id** uses the SSH protocol to connect to the target host and upload the SSH user key. The command edits the authorised_keys file on the server. 
>
> It creates the .ssh directory if it doesn't exist. It creates the authorised keys     file if it doesn't exist. Effectively, ssh key copied to server.
>
> It also checks if the key already exists on the server. Unless the -f option is given, each key is only added to the authorised keys file once.

> It further ensures that the key files have appropriate permissions. 
Generally, the user's home directory or any file or directory containing keys files should not be writable by anyone else. 
>
>  Otherwise someone else could add new authorised keys for the user and gain access. Private key files should not be readable by anyone else.

--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}



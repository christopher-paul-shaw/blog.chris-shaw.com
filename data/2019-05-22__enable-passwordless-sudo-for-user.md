How to enable a specific user to use the sudo command without entering their password

--PAGE--

In some situtations you might have a user which needs access to sudo but you dont know or have a password, for example when you only
have ssh-key access to a server.

To enable this we just need to modify the sudoers file:

1.Open Sudoers File
    
        sudo vim /etc/sudoers
    
2.Find the line containing includedir /etc/sudoers.d and add the following and save

        theusersusernamehere ALL=(ALL) NOPASSWD: ALL


--DATA-- {"category":"snippet"}

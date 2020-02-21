How to copy a file over sftp in one line
--PAGE--

Using sftp you can transfer files between systems in a secure fashion, making use of the ssh protocol. 

    echo 'put $FILE' | sftp -i $SSHKEY {$USERNAME}@{$SERVER}"
    
example php script


    <?php
    
    $file = './test.dat';
    file_put_contents($file, "test content");
    $identity_file = '.ssh/id_rsa';
    $command = "echo 'put {$file}' | sftp -i {$identity_file} user@server.com";
    shell_exec($command);

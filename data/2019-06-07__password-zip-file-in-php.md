How to add a file to a zipped archive protected with a password

--PAGE--

In PHP you can open and read ZIP archives, including ones with passwors through the use of ZipArchive, but there are scenarios where you may 
want to create an archive and add a password. This is not currently supported by ZipArchive but can be achieved by using a cli command executed by php.

## Requrements
- PHP
- Linux / Unix based host
- zip command


## Code

    <?php
        $fileName = "myfile.txt";
        $zipName = "myZip.zip"
        $password = 'mypassword';
        system("zip -P $password $zipName $fileName");

--DATA-- {"category":"code"}

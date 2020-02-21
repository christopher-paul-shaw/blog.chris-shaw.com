When backing up or transferring directories between computers its best to do so by compressing them in an archive to reduce space / bandwidth.
--PAGE--
# Creating An Archive
A simple way is using the TAR command which using the following sytnax

    tar -zcvf archive-name.tar.gz directory-name

tar: The Program we are using
(Flags)
-z: Compress archive using gzip program
-c: Create archive
-v: Verbose i.e display progress while creating archive
-f: Destination File Name

An Example of this would be the following

    $ tar -zcvf my-archive.tar.gz /home/cshaw/project

# Excluding a Directory

When creating the archive you may want to exclude certain directories, for instance .git

    $ tar -zcvf my-archive.tar.gz --exclude=".git" /home/cshaw/project

# Extracting An Archive

The syntax is similar to extract the active. The main difference is we change the flag -c (create) to -x (extract)

    $ tar -zxvf my-archive.tar.gz /home/chris/project

--DATA--
{"category": "snippet", "author": "Christopher Shaw"}

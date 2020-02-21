A simple command to extract the sql file from an sql.gz extention
--PAGE--
Its common to gzip a file before transporting it, it compressed the file making it smaller and easier to transfer. 
I use this regular for transferring database dumps, when I transfer this to a server it needs to be extracted before using.


The following command allows to to extract the file to gain access its non gzpped form.

    gzip -d yourfile.sql.gz

--DATA--{"category":"snippet"}

How to import and export large MYSQL Databses with Progress Bar.
--PAGE--

When importing and dumping mysql databases, it can take a while to perform such tasks and common MySQL clients dont tend to handle large databases quite well, appearing to just hang. 

Instead its easier and more informative to perform these actions on the command line and pipe the output through Pipe Viewer, so you can see the progress and estimated completion time.

# Install Pipe Viewer

    sudo apt-get update
    sudo apt-get install pv

# Import Database
 Replace the uppercase characters with your credentials.
 
    pv FILE.sql | mysql -uUSERNAME -pPASSWORD DATABASENAME

# Export Database
 Replace the uppercase characters with your credentials and the estimated size of the database.
 
    mysqldump -u USERNAME -pPASSWORD DATABASE | pv --progress --size ESTIMATEDSIZEINGBg -t -e -r -a > DATABASE-dump.sql

--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}


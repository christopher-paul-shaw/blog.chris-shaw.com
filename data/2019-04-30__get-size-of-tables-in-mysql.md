Listing out the size of all the tables in a mysql database.

--PAGE--

This is a small snippet to quickly see the sizes of all tables within a mysql database and ordering them in size descending. 
This is helpfull when trying to tidy existing databases and removing excess data.


    SELECT 
       table_schema as `Database`, 
       table_name AS `Table`, 
       round(((data_length + index_length) / 1024 / 1024), 2) `Size in MB` 
    FROM information_schema.TABLES 
    ORDER BY (data_length + index_length) DESC;
   
--DATA--{"category":"snippet"}

Code snippet to find what tables contain a specific column within a mysql database.
--PAGE--
 
The following query allows you to identify tables which contain a specific column, this can be helpful when working with larger databases which reference common field names which are not actually foreign keys. An example of this would be a user_id which is used on a user table, and other tables which can be tied to a specific user.
  
    SELECT DISTINCT TABLE_NAME 
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE COLUMN_NAME LIKE '%column_name%'
    AND TABLE_SCHEMA=’database_name’;

--DATA-- {"category": "snippet", "author": "Christopher Shaw"}

Large tables in mysql can be very slow to truncate, but this process can be easily made quicker.

--PAGE--

When Truncating a table, this is a slow process as each record needs to be deleted, a quicker way to achieve the same result "an empty table", is to recreate the table from the exisrting one, without all the data.

So we have a large table called example_table, we want to keep the table name, just get rid of the data, we can do this in the following simple steps

1. Rename the origional table

      RENAME TABLE example_table TO OLD_example_table;
  
2. Create the new Table

      CREATE TABLE example_table LIKE OLD_example_table;
 
3. Get Rid of the Old Table

      DROP TABLE OLD_example_table;
  
Now you will have a new table of the same structure and name as the old one, just without all the rows.

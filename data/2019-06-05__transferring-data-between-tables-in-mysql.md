Transferring data between tables using an SQL query rather.

--PAGE--

Sometimes you might need to transfer data between two tables, either as an exact clone or only specific columns. 
I recently tried to do an exact clone by exporting the data as a csv and reimporting but the data was corrupted, so I ended up just using the simpler
SQL query method


    INSERT INTO new_table (a,b,c,d,e)
    SELECT a,b,c,d,e FROM old_table

--DATA--{"category":"snippet"}

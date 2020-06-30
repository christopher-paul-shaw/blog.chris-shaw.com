SQL queries you can run to get the Size of MySQl Databases

--PAGE--

Get Size in GB

    SELECT 
      table_schema AS "Database", 
      SUM(data_length + index_length) / 1024 / 1024 / 1024 AS "Size (GB)" 
    FROM information_schema.TABLES GROUP BY table_schema
    
Get size in MB

    SELECT 
      table_schema AS "Database", 
      SUM(data_length + index_length) / 1024 / 1024 AS "Size (MB)" 
    FROM information_schema.TABLES GROUP BY table_schema

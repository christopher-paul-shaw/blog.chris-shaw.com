How to see the size of all tables in the database.
--PAGE--

The follwing SQL will return all tables in example_database

      SELECT TABLE_NAME, table_rows, data_length, index_length,  round(((data_length + index_length) / 1024 / 1024),2)
      "Size in MB" FROM information_schema.TABLES WHERE information_schema.TABLES.TABLE_SCHEMA = 'example_database' ORDER BY (data_length + index_length) DESC;

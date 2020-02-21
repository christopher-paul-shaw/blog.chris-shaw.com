Several commands for adding and modifying users in a mysql database.

--PAGE--

When working with a mysql database, you may need to add additional users for many reasons, following is a selection of commands to do this simply. 

Change username password,database_name and table_name to the real values.

# Create a User

	CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';

# Add All Privileges

	GRANT ALL PRIVILEGES ON * . * TO 'newuser'@'localhost';

# Reload Privileges
	
	FLUSH PRIVILEGES;

# Add Specific Permission

	GRANT type_of_permission ON database_name.table_name TO ‘username’@'localhost’;

# Remove Specific Permission
	
	REVOKE type_of_permission ON database_name.table_name FROM ‘username’@‘localhost’;

# Delete User

	DROP USER ‘username’@‘localhost’;


# Show Permissions
 
	SHOW GRANTS username;

--DATA-- {"category": "snippet", "author": "Christopher Shaw"}

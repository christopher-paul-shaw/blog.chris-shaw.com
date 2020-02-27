How to check if a datbase exists from the command line.

--PAGE--

## A little background
As part of a deployment script, needed a way to detect if a database already exisit, and if not, create and seed the database.

## Simple Methods

### 1) Show Databases
This consists of just running the SHOW DATABASEs command and piping through to grep to search for the database name.

  mysql -uUSER -pPASSWORD-e "SHOW DATABASES" | grep DATABASENAME


### 2) Using mysqlshow
This uses the mysql show command to check for the database and echo a string if found

   mysqlshow -uroot -psecret "DATABASENAME" > /dev/null 2>&1 && echo "Database exists."

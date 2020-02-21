How to disable Safe Mode in MySQL Workbench
--PAGE--
By default MySQL Workbench has Safe Mode enabled, which prevents sql's which dont target a primary key.

"You are using safe update mode and you tried to update a table without a WHERE that uses a KEY column To disable safe mode"

Example of this would be

    UPDATE tbl_users SET user_name = ''

In some situaltions you may need to do blanket SQL's such as above, I first ran into this when sanitizing a database for use in a dev enviroment.

In MySQL Workbench
- Edit
- Preferences
- SQL Editor
- Uncheck "Safe Updates"

--DATA-- {"category": "snippet", "author": "Christopher Shaw"}

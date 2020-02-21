Procedure snippet for connecting to a database through an SSH Tunnel. Used for local development requiring live data.
--PAGE--

When developing or debugging code, its best practice to do everything locally, including using a local database installation. But sometimes you need access to libe data, in such cases as;
- Developing requiring live data
- Debugging an issue

The simplest way do achieve this is using an SSH Tunnel, but when you do so be aware that you can affect live data. So only use not descructive queries, such as SELECTS.

1. Disable Local Database 
`sudo service mysql stop`
2. Create Tunnel
`ssh yourname@server -L3306:localhost:3306`

Now interacting with the local version of your database will actually be interacting with the live database.
--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}

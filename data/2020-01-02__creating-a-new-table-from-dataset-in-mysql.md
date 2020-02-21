How to put the results of a select query into a seperate table.
--PAGE--
I recently had to work on converting a copy of a large mysql database into a smaller development database. One of the early problems I had was one table had over 2 million rows, and I only needed a handful for testing.
The easiest way i found to do this task was to create a new table with just the records I needed. Then swap them around.


MySQL has the nice option of creating a table directly from a select, such as the following:

	create table new_table
	select * from old_table;

An example of this in action would be a booking system, where you only wanted to keep bookings from  2019.

	create table bookings_2019;
	select * from bookings WHERE date >= '2019-01-01' and date < '2020-01-01';

In my instance I only would want the new records, so can drop the old data

	DROP TABLE bookings;
	ALTER TABLE `bookings_2019`
	RENAME TO `bookings`;

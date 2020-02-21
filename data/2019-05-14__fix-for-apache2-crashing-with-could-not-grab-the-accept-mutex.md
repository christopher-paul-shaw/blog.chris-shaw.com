Fix for when the Apache2 service repeatedly crashes due to not being able to find the Mutex.

--PAGE--

I recently started getting this issue when I upgraded my server, I noticed that when I deployed to the server apache would stop every time, when reading the logs

    [Tue May 14 09:21:58.066062 2019] [mpm_prefork:emerg] [pid 29308] (43)Identifier removed: AH00144: couldn't grab the accept mutex
	[Tue May 14 09:21:58.891316 2019] [core:alert] [pid 29304] AH00050: Child 29305 returned a Fatal error... Apache is exiting!

This was pointing to an issue with the mutex, not being accessible, there is a simple fix to this though.

Edit /etc/apache2/apache2.conf and find Mutex, it may be missing or be set to

    Mutex file:${APACHE_LOCK_DIR} default

Either add, or replace with the following 

    Mutex posixsem

Then restart Apache

	sudo service apache2 restart

--DATA--{"category":"tutorial"}

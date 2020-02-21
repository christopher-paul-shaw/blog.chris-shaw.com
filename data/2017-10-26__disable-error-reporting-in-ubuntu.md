Ubuntu comes with a program called Apport, which is designed to inform the user where the system has detected a problem, or if a program has crashed. Although it is a well intended program, it gets in the way and is rather annoying, especially when it does not give you much information about the problem, or the problem which triggered it is of no real concern.

--PAGE--

![Error Reporting Photo](https://www.chris-shaw.com/asset/images/articles/apport.png)

__*Be warned, Error Reporting is there to inform you when something is wrong, only continue if you accept any risk of doing so*__


## 16.04 and Above
systemd ignores the Apport Config file, so we need to manage it with systemd.

Disable

	sudo systemctl disable apport.service
	systemctl mask apport.service
	
Re Enable
	
	systemctl unmask apport.service
	sudo systemctl enable apport.service


## Previous Ubuntu Versions

Prior to to the introduction if systemd, we can enable / disable apport using its Config File.

	sudo nano /etc/default/apport/

	 
Then we need to change the enabled flag

### Enable
	
	enabled=1
	
### Disable
	
	enabled=0


## Removing Apport
You also now have the option to Remove the Apport Program.
### Remove

	sudo apt purge apport

### Reinstall

	sudo apt install apport


--DATA--
{"category": "general", "author": "Christopher Shaw"}

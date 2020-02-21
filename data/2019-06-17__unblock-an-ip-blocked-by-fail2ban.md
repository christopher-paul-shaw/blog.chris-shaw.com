Instructions on unbanning an IP which has been blocked by Fail2Ban.
--PAGE--
Fail2Ban is a tool used on web servers for protecting unauthorised access through bruit force attempts.

This works by allowing a small amount of login attempts before it drops the remote IP into the iptables and blocking them untill fail2ban unblocks. Occasionally this can catch out genuine login attempts.

## To Unblock an IP

### 1. Check the IP Tables for the IP

    iptables -L -n


### 2. Check Active Jails

    fail2ban-client status

### 3. Unban using Fail2Ban

    fail2ban-client set JAIL unbanip IPADDRESS

e.g

    fail2ban-client set ssh unbanip 8.8.8.8

--DATA--{"category","Linux Admin"}

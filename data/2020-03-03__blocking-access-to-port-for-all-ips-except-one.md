How to only allow one IP to access a port on a linux server using iptables

--PAGE--
Using the following command you can block all incoming requests to a specific port for all ip's except the one specified

  iptables -I INPUT -p tcp ! -s YOURIPADDRESS --dport PORT -j DROP
  
An example would be blocking mailcatcher's port 1080 from outside parties

  iptables -I INPUT -p tcp ! -s 127.0.0.1 --dport 1080 -j DROP

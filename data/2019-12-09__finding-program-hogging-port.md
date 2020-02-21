How to locate and kill a process which is hogging a port on the server.

--PAGE--

Although this is a strance scenario, recently i tried using mailcatcher, a program which interecepts emails and stops them being sent from the server, instead
dropping them into a Web Inteerface, but when launching the program it threw an error that something was using port 1025.

In this case it was an instance of itself already running, but following is how to identify what process / proram is using a port.

# Finding PID   

  $ sudo lsof -nP -iTCP:1025 -sTCP:LISTEN
  COMMAND     PID  USER   FD   TYPE  DEVICE SIZE/OFF NODE NAME  
  mailcatch 31915 admin    7u  IPv4 3642886      0t0  TCP *:1025 (LISTEN)
  
# Killing

  $ sudo kill 31915

   
--DATA--{"category":"server"}

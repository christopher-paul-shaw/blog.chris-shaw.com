Using SCP you can transfer files easily between one computer and another where ssh is available. This article is reference notes on how to use scp.
--PAGE--

# About SCP
 “Secure Copy Protocol. The SCP is a network protocol, based on the BSD RCP protocol, which supports file transfers between hosts on a network. SCP uses Secure Shell (SSH) for data transfer and uses the same mechanisms for authentication, thereby ensuring the authenticity and confidentiality of the data in transit.” Wikipedia

# Syntax

	scp source destination


# Example Down
Transfer a file from the /var/www directory of the server to my home directory.

	scp chris-shaw.com:/var/www/file.txt ~/file.txt

# Example Up
Transfer a file from my home directory to the /var/www directory of the server.

	scp ~/file.txt chris-shaw.com:/var/www/file.txt

# Related
When transferring large files or lots of files, look into using compressions with tar.gz, see https://www.chris-shaw.com/blog/compressing-a-directory-on-linux 

--DATA--
 {"category":"snippet"}

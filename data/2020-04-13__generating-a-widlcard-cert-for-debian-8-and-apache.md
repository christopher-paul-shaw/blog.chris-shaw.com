How to quickly generate a wildcard SSL Cert on a Debian System

--PAGE--
Using CertBot we can use letsencrypt to get a wilcard SSL Certificate, but on Debain 8 due to limitations of the system certbot cannot generate wildcard ones via the automated scripts.

Instead you need to request a certificate and perform a manual dns challenge by adding a DNS TXT Record.

Using the following command you request the certificate and trigger the DNS TXT Challenge


        certbot-auto certonly  --manual --preferred-challenges=dns 
        --email youremail@example.co.uk--server https://acme-v02.api.letsencrypt.org/directory --agree-tos -d *.example.co.uk

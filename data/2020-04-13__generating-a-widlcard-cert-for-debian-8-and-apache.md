How to quickly generate a wildcard SSL Cert on a Debian System

--PAGE--




        certbot-auto certonly  --manual --preferred-challenges=dns --email youremail@example.co.yk--server https://acme-v02.api.letsencrypt.org/directory --agree-tos -d *.example.co.uk

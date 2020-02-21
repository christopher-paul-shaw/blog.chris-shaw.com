In this article we are looking at how we can use a custom domain for our email addresses whilst using the popular webmail GMail without having to pay for the benefit.
--PAGE--

**GMAIL** (https://mail.google.com) is probably the most friendly and easy to use Web Mail client currently out there. 
With years of research and development behind every aspect, it would be hard to find something comparable.

The main problem with Free Gmail Accounts though, is the lack of professional looking email addresses that are currently available. 
The majority of respectable ones are already taken, and having a free email host in your email address does not look as good as domain branded one.

For instance do you prefer someguy17263@gmail.com or hello@mywebsite.com

![Figure 1](https://www.chris-shaw.com/asset/images/articles/gmail-custom-domain-fig1.PNG)

**Try getting yourname@gmail.com without some random numbers or words in there.**

You can instead use your own domain with Gmail, which allows you to make use of yourname@yourdomain.com.
There are two methods to do this:
**1. GSuite**
This is googles commercial office suite and one of the features is support for a custom domain. The caveat with this is that it is not free, and if you only
want to use your domain for email, then you probably don’t want to pay a monthly fee.

**2. Email Forwarding and Send As**
Another option is to use either your domain registrar or another service to forward all email to your Gmail account, and enabling google to send from the domain.
This is the option we will be looking at today.

# Requirements
**1. Domain Name** 
For the purpose of this guide, I have registered a free domain sha1.tk using Freenom (https://www.freenom.com/).
I have used Freenom as they provide free domains for up to 12 months at a time,

**2. Google Account**
You can use an existing account, or registered for a new one.

# Lets Get Started

## 1. Forwarding Email
This step is different depending on which domain registrar you use, there are guides for most popular registrars such as godaddy but here we will assume you don’t have a registrar which supports Forwarding Email.

Instead we will use ImprovMX to forward the email for us.

![Figure 1](https://www.chris-shaw.com/asset/images/articles/gmail-custom-domain-fig2.PNG)

- Register the Domain you want to Use
- ImprovMX then provides you with instructions of what changes you need to make to your domain MX records
- Add a catchall email forwarder *@yourdomain.com to point to your Gmail account
- Click Test and you will receive an email to confirm forwarding

![Figure 1](https://www.chris-shaw.com/asset/images/articles/gmail-custom-domain-fig3.PNG)

By this point you can happily use your new domain, and anything before the @ will be sent to the desired Gmail account.

So I can now receive all email sent to @sha1.tk, including hello@sha1.tk, test@sha1.tk
	
## 2. Send As Domain
Now you have your professional email address to hand out, but when you go to reply to an email you still currently have to send as your Gmail account.
Thanks to Google Aliasing we can send from our Gmail account as another email address.

- Firstly, you need to enable "Less Secure Apps" (https://www.google.com/settings/security/lesssecureapps) 
- In Gmail, click the gear icon and go to settings 
- Then go to Accounts and Import, choose Add another email address
- Enter Your Name and the Email address you want to use and click Next Step
- Input the following settings
SMTP Server: smtp.gmail.com
Username: The start of your Gmail address, before the @. For example if the email is someexamplename@gmail.com, then your username is someexamplename
Password: Your GMAIL password.
Port: 587
Secure connection using: TLS

![Figure 1](https://www.chris-shaw.com/asset/images/articles/gmail-custom-domain-fig4.png)

## 3. Verify
Upon completion, you will receive a verification email with a link, once you visit this link it will allow you to use the email address to send email.

To confirm the email is working, try sending an email to another email address you own, or a temporary email service such as https://temp-mail.org/ to confirm you can send.

--DATA-- {"category": "tutorial", "author": "Christopher Shaw"}

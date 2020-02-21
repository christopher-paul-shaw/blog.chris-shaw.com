Why i rebuilt my website.

As part of its life-cycle, this website has undergone a rebuild on top of a new framework and the addition of some new features.

--PAGE--

# Why Rebuild It?
The older website was becoming stale and had a few bugs which I did not really have the time to address, and was relying on a more complex software stack than it really needed, so when I did have time to look at this site, I decided a rewrite was in order.

### What was the Goal with the Rewrite
- To speed up the site
- Make it easier to Maintain
- Learn a framework rather than code everything myself

The above goals were all met by simply using a decent framework.
### A Framework
I decided that **using a framework** would be the most important point, more for the fact that I work with lots of different code on a daily basis, that having varying custom code in my own projects made it harder to maintain.

In another article I will go through my search for my idea framework.

Eventually I decided to use [phpGT](http://www.php.gt) as it has a low learning curve and generally gets out of the way. Favoring the idea that php drops in when needed.

#### The Benefits 
- Increased page load due to framework only getting involved when needed
- Using the same framework for multiple projects makes maintenance easier

# Anything New?
## New Blog
The last version of this website was the only one to not contain a blog, this was purely due to the previous sites blog being buggy. At the time not much was done on the site so it was removed. In this version though, I have opted for a different format.


Rather than having a blog powered by a MySQL Database, the one on this version of the website uses the filesystem to load and manipulate **markdown** files. This has been combined with the routing of the framework to make a resilient yet simple blogging platform.

--DATA--
{"category": "site", "author": "Christopher Shaw"}








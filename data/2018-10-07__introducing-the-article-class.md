Article, is a class which interacts with files in the disk and returning them in a simple to use format.

--PAGE--

# What does Article Do?

It accesses files such as markdown files within a predefined directory, gets the content and other information and returns it back to the user with simple to use functions.
- Lists Articles
- Search Articles
- Load By Filename
- Load By Name
- Can specify what extensions to work with.

The intent of this class is to be used in several projects which access articles, allowing the functionality to be quickly added rather than recreated each time.

## Some Example Uses
- Blog
- Wiki


# Usage

## List / Search
    use CPS\Article;

    $dir = "./where/your/files/are";
    $article = new Article($dir);
    $results = $article->list("your term here");

## Load (By Name or Filename);

    use CPS\Article;

    $dir = "./where/your/files/are";
    $article = new Article($dir);
    $results = $article->load("Article Name");


# How to Install

## 1. Composer
The preferred method is using composer (https://getcomposer.org/) and can be installed using the following command

    composer require christopher-paul-shaw/article 

## 2. Cloning
You can also clone the repository from github

    git clone git@github.com:christopher-paul-shaw/Article.git


**Url:** https://github.com/christopher-paul-shaw/Article/

--DATA--
{"category": "project", "author": "Christopher Shaw"}

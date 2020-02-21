
Release Announcement for the Input Class

--PAGE--

Introducing the Input class, an Object Oriented approach to Securing Input in php.

The problem with how PHP handles input, its that it puts the data in globally accessible arrays, including $_POST and $_GET.
Not only does our code have access to everything in these arrays, so does any third party code you include.


# Summary
This class blanks out the Super Globals $_POST and $_GET and stores their contents within the class. Allowing better control over the input and what code can access it.

# Basic Usage

    $input = new Input();
    echo $input->get('id');
    echo $input->post('id');

# Default Parameters
Default Parameters can be passed as the second option
    
    $input->get('test','default value here');
    
# Sanitization 
Strips Tags by default, can be disabled by passing false as third option.
    
    $input->get('test',false,false);

# Test
As features are added, there will be new tests to prove they work as intended. 
You can run the tests yourself using the following command.

    vendor/bin/phpunit test


# Install

    composer require christopher-paul-shaw/input
    
# Links

-   https://packagist.org/packages/christopher-paul-shaw/input
-   https://github.com/christopher-paul-shaw/Input
    
--DATA-- {"category": "project", "author": "Christopher Shaw"}

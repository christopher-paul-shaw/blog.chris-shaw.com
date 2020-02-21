How to actually run scripts in a plesk server with the correct PHP Version.

--PAGE--

Plesk is a tool for managing multiple websites with their own settings including PHP. But comes with alot of caveats, especially with configuration.

Recently I needed to run a PHP a script as 7.2, but the OS Default is 5.6 so plesk kept forcing the script to run as 5.6. 

To run the script as the desired version, had to pass the PHP version as an Enviroment Variable to force any subshells to use the correct PHP version.

    env “PATH=/opt/plesk/php/7.2/bin:$PATH” php script.php

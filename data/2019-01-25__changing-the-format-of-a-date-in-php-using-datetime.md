Code snippet to convert a date using the DateTime class in PHP.

--PAGE--

The following snippet of code allows you to convert a date from one format to another easily in PHP by using the built in DateTime class. 

An Example of this would be to conver a standard UK date to a Database Friendly date such as 01/01/1988 to 1998-01-01
  
    $date = DateTime::createFromFormat("d/m/Y","01/02/2017");
    $formatted = $date->format("Y-m-d");

--DATA-- {"category": "snippet", "author": "Christopher Shaw"}

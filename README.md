Open Source Soup Template
=========================

An basic website template setup using PHP, Composer, Slim, Twig, Illuminate Database and Bootstrap.

This template provides everything you need to create a simple, light, fast, dynamic website.

## Installation
Just download the zip and extract to a folder on your system. After setting up the DB as per the Database 
instructions below you should be able to start a webserver pointing to the www folder. If you are using PHP 5.4
or above then you can use the inbuilt PHP webserver using.

````
php -S localhost:8090
````
Otherwise you'll need to setup Apache/Nginx or whatever to point to the www folder.

## Database Setup
To use you'll need to setup a MySQL db schema called test containing a single table as defined by the SQL below.

````sql
CREATE TABLE `test`.`soups` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `temperature` VARCHAR(45) NULL,
  `updated_at` DATETIME NULL,
  `created_at` DATETIME NULL,
  PRIMARY KEY (`id`));
````

This table should be accessible by a user/password of soup/soup.

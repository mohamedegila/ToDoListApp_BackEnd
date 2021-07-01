<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# To-Do List application

Build an application for managing user’s To-Do list and functionality below:
View To-Do List
Add / Edit / Delete To-Do tasks

### Prerequisites

You should have  `composer` installed. If you don't install composer from [here](https://getcomposer.org/download/).

### Installing
1. Download the zipped file and unzip it or Clone it
	```sh
	git clone https://github.com/mohamedegila/ToDoListApp_BackEnd.git
	```
2. cd inside the project
    ```sh
    cd ToDoListApp_BackEnd
    ```
3.  Run this command to download composer packages
    ```sh
    composer install
    ```
4. Run this command to update composer packages
    ```sh
    composer update
    ```
5. Create a copy of your .env file
    ```sh
    cp .env.example .env
    ```
6. Create a copy of your .env.testing file
    ```sh
    cp .env.example .env.testing
    ```
7. Generate an app encryption key
    ```sh
    php artisan key:generate
    ```

8. Copy key and put it into .env.testing key

9. Create an empty database for our application in your DBMS
10. In the .env file, add database information to allow Laravel to connect to the database
11. In the .env.testing file, add database information to allow Laravel to connect to the database
12. Migrate the database
    ```sh
    php artisan migrate
    ```

13. Open up the server
    ```sh
    php artisan serve
    ```
14. Run unit test 
    ```sh
    php artisan test
    ```
<!-- 11. Open your browser on this url ``` http://localhost:8000``` -->

### License
MIT License

Copyright (c) 2021 OS41

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

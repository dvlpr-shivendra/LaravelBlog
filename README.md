<h1>LaravelBlog<h1>


## About LaravelBlog

LaravelBlog is a baisc blogging website made with laravel 5.7, It has following features:
- Users can create blogs with image.
- Comments.

A live version of this website is available at http://saytoworld.herokuapp.com


## Requirements

If you want to run it on your system, You will need these:

- PHP >= 7.1.3
- Laravel framework


## Installation

Follow these steps:

- Clone the repo.
- Then execute these commands In the terminal:</br>
    i. composer install</br>
    ii. cp .env.example .env</br>
    iii. php artisan key:generate
- Configure your database credentials in the .env which is present in the projects's root directory.
-Execute command - php artisan migrate
- Finally execute command php artisan serve and visit http://localhost:8000 in the web browser.

# CST8257 Final Project - Group 19 - Algonquin College

A simple Social Media Network Web site using Lumen (a micro framework by Laravel) and AngularJs

## Our group

Our group has 3 members:

* Dang Thanh Huy Do
* Zhi Cheng
* Inamul Haq

## Getting Started

These instructions will help you build the environment and run the project on Windows machine

Make sure your machine has installed Wampserver or Amps because Lumen requires (PHP >= 7.1.3, OpenSSL PHP extension). If your PHP version does not meet the requirements, you should upgrade it to the newest PHP version (Google how to do it). And do not forget to enable `OpenSSL` extension.

### Install Lumen

- Download and install `composer`: [link](https://getcomposer.org/download/)

- Run the following command to install `Lumen` using `composer`

```
composer global require "laravel/lumen-installer"
```

### Setup project

- Clone this project

- Open command line (cmd), cd to the folder, and type this command to install all of the needed components

```
composer install
```

Before doing the next steps, make sure you change the file's name `.env.example` to `.env` and update the file's content to be suitable with your mysql server

- Type the following command to create database and tables

```
php artisan migrate
```

- Type the following command to insert data to tables

```
php artisan db:seed
```

That's it!!!

For more information, go to [Lumen Documentation](https://lumen.laravel.com/docs/5.7)
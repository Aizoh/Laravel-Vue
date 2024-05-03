<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

## Add mongo package
```php
#Add library
sudo pecl install mongodb
#php ini file
extension="mongodb.so"
#add package 
composer require mongodb/laravel-mongodb

```
Add configuration
 config\database.php file under the “connections” 

```php
'connections' => [
  'mongodb' => [
        'driver' => 'mongodb',
        'dsn' => env('DB_URI', 'mongodb+srv://username:password@<atlas-cluster-uri>/myappdb?retryWrites=true&w=majority'),
        'database' => 'myappdb',
],
```
Set the default database connection name in config\database.php:

```php
'default' => env('DB_CONNECTION', 'mongodb'),
```

Add the following to the provider’s section in your app.php file:

```php
'providers' => [

/*
* Laravel Framework Service Providers...
*/

MongoDB\Laravel\MongoDBServiceProvider::class,
```
Now Migrations

```php

//Replace the use Illuminate\Database\Schema\Blueprint import with 
use MongoDB\Laravel\Schema\Blueprint

#inside the class define both in model and migration file
    protected $connection = 'mongodb';

```
### Use Mongo for Authentication

See The link for [laravel 11 ](https://laravel.com/docs/11.x/authentication#the-user-provider-contract)
```php
//Auth scaffold
 composer require laravel/ui
//Generate Basic Scaffolding & with Authentication Using Bootstrap
$ php artisan ui bootstrap $ php artisan ui bootstrap --auth
```
#### also in the service provider include
```php
MongoDB\Laravel\Auth\PasswordResetServiceProvider::class,

#In the User Model
use MongoDB\Laravel\Auth\User as Authenticatable;
use MongoDB\Laravel\Eloquent\Model;


```
in the Auth.ph under guards add 

```php
 //for mongodb
         'mongodb' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
```
Issues with Error 419 On registration Laravel 11
[solution see](https://www.youtube.com/watch?v=9BVji8lWqbk)

```php 

SESSION_DRIVER=database #change to 

SESSION_DRIVER=file
```

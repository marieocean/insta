# Laravel PHP Framework using laradock

This is a laravel 5 working with php 7.4 and mysql 5.7

# Learned about rebuilding mysql in laradock

    # Modify .env file
     MYSQL_VERSION=5.7 # default is latest
     
     # mysql container
    docker-compose stop mysql
     
     # Delete old database data
    rm -rf ~/.laradock/data/mysql
     
     # ! Pay attention to restart the docker application, and then build a new mysql
    docker-compose build mysql
     
       # Recreate the container
    docker-compose up -d nginx mysql
     
     # View existing mysql version
    docker inspect laradock_mysql_1


src : https://www.programmersought.com/article/2540824196/

## First step authentication

Forgot password is not working
Error log is not found


## Design

How to set another bootstrap version
How to compile the scss
Why the data content disappears when fixing width
How to include the font family

#Authentication
Learned that tinker needs namespace in this version
App\User::all() instead of User::all();

## Creating a profile
Issues to be dealed with later
5.3 did not have the routes/web.php
ProfileController was created as read-only when using php artisan
command php artisan make:controller ProfileController

what is the difference between routes and web in both versions

## Logs
here is the command on terminal to display logs on laradoc
docker logs -f --details laradock_php-fpm_1 

## How to display a 404 (mine is error logs) 

## Cascading deletion in relationship

## Csrf
In Laravel 5.6, csrf file is not @csrf
but {{ csrf_field() }}
You can use {{ csrf_token() }} if you want to generate a token

## Validation
$this->validate(request(), [
            "caption" => "required",
            "image" => ["required", "image"]
        ]);
instead $request()->validate()

## TODO : 02h 05m

## To save file
### config file system to the storage_path 
 'public' => [
            'driver' => 'local',
            'root' => storage_path('storage/public'),
            'visibility' => 'public',
        ],


### save a file
$image = $request->file('image');
$image->move('uploads', $image->getClientOriginalName());

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
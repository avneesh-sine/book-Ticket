# booking-ticket
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:



Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Installation

After checkout this reposatory you need to follow below steps:

- Run below command to install all required dependencies
``` bash
composer install
```

- After installed dependencies, you need to run below commands to copy .env.example to .env and generate APP_KEY on root: 
``` bash
php -r "file_exists('.env') || copy('.env.example', '.env');"

php artisan key:generate
```

- Edit the .env file to change the attributes for appplication name, appplication url and database to your database configurations (host,username,password etc)
``` bash
APP_NAME="Application Name"
APP_URL="http://example.com"
.
.
.
DB_DATABASE=database_name
DB_USERNAME=database_username
DB_PASSWORD=database_password
```

- After all settings you need to run below command to create database tables into database, before run this command you have created database with name that you set in last step: 
``` bash
php artisan migrate
```

- Now you need to run below command to insert default data into database: 
``` bash
php artisan db:seed --class=SeatsSeeder



# Credits
- Laravel PHP Framework - https://laravel.com/docs/7.x/installation
- Bootstrap Framework - http://getbootstrap.com/
- jQuery Library - https://jquery.com/
- Font Awesome - http://fontawesome.io/

# License
This library is under MIT license, please look at the `LICENSE` file

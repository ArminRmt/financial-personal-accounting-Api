## Screenshots

<img src="https://github.com/ArminRmt/FlutterApi-laravel/blob/master/postman.png" width=100% height=450 alt="">
<br>

## Description
financial management and personal accounting  Api

## Features
- **API**
- **CRUD**
- **Managing requests and responding to them**
- **Laravel Sanctum**
- **Postman**

## Postman
in [here](https://web.postman.co)
make sure to install Desktop Agant and run it
\
\
**add header -> Accept + application/json** 
\
\
 recive categories :
    http://127.0.0.1:8000/api/categories    method:get    
    http://127.0.0.1:8000/api/categories/1  method:get
    
 store categories    
    http://127.0.0.1:8000/api/categories    method:post,      fil name    
    
 update categories    
    http://127.0.0.1:8000/api/categories/1  method:put,       fil (name with better token)

 delete  categories    
    http://127.0.0.1:8000/api/categories/1  method:delete     
    
 auth  login    
    http://127.0.0.1:8000/api/auth/login    method:post,      fil (email-device_name-password)
    
 auth  register    
    http://127.0.0.1:8000/api/auth/register method:post,      fil (name-email-device_name-password-password_confirmation)
    
 auth  logout     
    http://127.0.0.1:8000/api/auth/logout   method:post,      fil (email)



 

## Installation:
	download file
    cd to project folder
    composer update
	composer install
	cp .env.example .env            
	create with your database   env file  ->  DB_DATABASE = name
	php artisan key:generate    -> APP_KEY
	php artisan migrate
	php artisan serve

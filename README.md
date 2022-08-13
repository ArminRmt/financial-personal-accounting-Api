## Screenshots
wegwer


## Description
financial management and personal accounting  Api

## Features
API
CRUD
Managing requests and responding to them
Laravel Sanctum 
Postman


## Postman
**add header -> Accept + application/json** 
\
\
 recive categories :
    http://127.0.0.1:8000/api/categories    method:get    
    http://127.0.0.1:8000/api/categories/1  method:get
    
 store categories    
    http://127.0.0.1:8000/api/categories    method:post,      fil name    
    
 update categories    
    http://127.0.0.1:8000/api/categories/1  method:put,       fil attributes

 delete  categories    
    http://127.0.0.1:8000/api/categories/1  method:delete     
    
 auth  login    
    http://127.0.0.1:8000/api/auth/login    method:post,      fil user attributes  
    
 auth  register    
    http://127.0.0.1:8000/api/auth/register method:post,      fil user attributes
    
 auth  logout     
    http://127.0.0.1:8000/api/auth/logout   method:post,      fil user attributes



 

## Installation:

	download file
	composer install
	npm install
	npm run dev
	cp .env.example .env            
	customize with our database   env file  ->  DB_DATABASE = name
	localhost/phpmyadmin   crate database(name)
	php artisan key:generate    -> APP_KEY
	php artisan migrate
	php artisan serve

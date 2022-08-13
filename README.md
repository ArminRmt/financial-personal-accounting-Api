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

// recive categories :
    http://127.0.0.1:8000/api/categories    get      200 ok
    http://127.0.0.1:8000/api/categories/1  get
// store categories    
    http://127.0.0.1:8000/api/categories     post   fil name       201 created
// update categories    
    http://127.0.0.1:8000/api/categories/1     put   fil attributes
// delete  categories    
    http://127.0.0.1:8000/api/categories/1     delete           204 no content
// auth  login    
    http://127.0.0.1:8000/api/auth/login     post   fil user attributes    
// auth  register    
    http://127.0.0.1:8000/api/auth/register     post   fil user attributes
// auth  logout     
    http://127.0.0.1:8000/api/auth/logout     post   fil user attributes



 

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

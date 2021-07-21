# APITestMaster
full RestFull API Using Passport


## Getting Started

for test These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

```
Laravel
PHP 7+
mysql

```

### Installing

A step by step series of examples that tell you how to get a development env running

Execute one by one

```
-> cp .env.example .env
-> composer install
-> php artisan key:generate 

create folder under public/storage/images

-> php artisan migrate:fresh --seed
-> php artisan passport:install

-> php artisan serve
```

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

I am using Postman u can use anyone like insomnia

### create user token for create update and delete operation

-> (POST)localhost:8000/oauth/token

Headers
```
Accept : application/json
Content-Type : application/json
```

Body(put your details [Nb: password allows be 'secret' if you are using seed command] )
```
{
	"grant_type" : "password",
	"client_id" : "2",
	"client_secret" : "xZNRgxf0f6xFmS8CLxcxkioL7Yhgj9eKOhFxIhkj",
	"username" : "lkertzmann@example.org",
	"password" : "secret"
}
```

## Break down into end to end tests

Flow below instraction for test your API 

### Get all products
```
(GET) http://localhost:8000/api/products

Headers
Accept : application/json
Content-Type : application/json
Authorization : "put your user secret"
```

### Get single products
```
(GET) http://localhost:8000/api/products/1

Headers
Accept : application/json
Content-Type : application/json
Authorization : "put your user secret"
```

### Get all reviews in particular product
```
(GET) http://localhost:8000/api/products/1/reviews

Headers
Accept : application/json
Content-Type : application/json
Authorization : "put your user secret"
```

### Create review
```
(POST) http://localhost:8000/api/products/1/reviews

Body(put your details)
{
	"customer": "Rakib Hasan Sabbir",
    "review" : "Quo sapiente quos suscipit. Dolor et sit architecto deserunt sunt.",
    "star" : 5
}

Headers
Accept : application/json
Content-Type : application/json
Authorization : "put your user secret"
```

### Delete review
```
(DELETE) http://localhost:8000/api/products/1/reviews/501

Headers
Accept : application/json
Content-Type : application/json
Authorization : "put your user secret"
```

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Simple User CRUD API with Laravel and Decorator Pattern

This is a simple Laravel CRUD API for managing user data, showcasing the use of the Decorator Pattern. The Decorator Pattern is used to dynamically add behavior or modify data without altering the core functionality.

## How the Decorator Pattern is Applied

The Decorator Pattern is a structural design pattern that allows behavior to be added to individual objects, either statically or dynamically, without affecting the behavior of other objects from the same class.

In this project, the Decorator Pattern is utilized to enhance user data before sending or receiving it from the API. The `FullNameDecorator` is an example of a decorator that adds a `full_name` attribute to the user data, which is a combination of `first_name` and `last_name`.

- By using the Decorator Pattern, we can easily extend and modify user data with new decorators as needed, without modifying the core user functionality.

## Getting Started
- Clone the repository to your local machine.
- Install the dependencies by running `composer install`.
- Create a database and configure the database connection in `.env` file.
- Run the migrations by running `php artisan migrate`.
- Seed the database with some data by running `php artisan db:seed`.
- Start the Laravel development server by running php artisan serve.
## API Endpoints
The API exposes the following endpoints:

- `GET /users` - Get all users
- `GET /users/{id}` - Get a user by ID
- `POST /users` - Create a new user
- `PUT /users/{id}` - Update a user
- `DELETE /users/{id}` - Delete a user

## Testing
The API can be tested using Postman. A Postman collection is included in the repository. To import the collection, open Postman and click on the Import button. Select the `Laravel Design Patterns.postman_collection.json` file from the repository.

The Postman collection contains requests for all of the API endpoints. You can use the requests to test the API and verify that it is working correctly.

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

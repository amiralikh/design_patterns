<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Simple User CRUD API with Laravel and Adapter Pattern

This repository demonstrates the implementation of a simple CRUD API for managing user records in a Laravel application, utilizing the Adapter Pattern. The Adapter Pattern is a structural design pattern that allows objects with incompatible interfaces to collaborate. In this context, we use the Adapter Pattern to seamlessly interact with different data sources while maintaining a consistent interface.rn is useful when you need to create different types of objects, while the singleton pattern is useful when you need to ensure that there is only one instance of an object, such as a database connection or a cache.

## How the Adapter Pattern is Applied

### Repository Interface (UserRepositoryInterface):
We define an interface that outlines the CRUD operations for managing user records. This interface acts as a contract that our adapters will adhere to.

### Repository Adapter (UserRepositoryAdapter):
We create an adapter class that implements the UserRepositoryInterface. This adapter acts as a bridge between our application's code and the database. It encapsulates the database-specific logic required to perform CRUD operations on user records.

### Service Provider Binding (AppServiceProvider):
In the Laravel service provider, we establish a binding between the UserRepositoryInterface and the UserRepositoryAdapter implementation. This binding ensures that when our application requires a UserRepositoryInterface instance, Laravel will provide an instance of the adapter.

### Controller (UserController):
In the controller, we inject an instance of the UserRepositoryInterface via constructor injection. This allows us to interact with user records without worrying about the underlying data source. The controller actions utilize the methods defined in the interface to perform CRUD operations.

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

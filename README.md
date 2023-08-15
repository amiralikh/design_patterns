<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Simple User CRUD API with Laravel and Facade Pattern

This project demonstrates a simple CRUD API for managing users in a Laravel application using the Facade pattern. The Facade pattern is used to provide a simplified interface to interact with complex subsystems, in this case, the CRUD operations for users.
## Facade Pattern Implementation
The Facade pattern is implemented in this project to abstract the complexities of interacting with the user data. Here's how it works:

### UserFacade
This facade provides a simple interface to interact with user-related operations. It acts as a static proxy to the underlying `UserService`.
### UserService
The `UserService` contains the actual implementation of CRUD operations for users. It encapsulates the logic and database interactions.
### UserFacadeServiceProvider
This service provider binds the `UserFacade` to the `UserService` so that you can use the facade to access user-related functionality.

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

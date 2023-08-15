<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Simple User CRUD API with Laravel and Observer Pattern

This project demonstrates a simple Laravel CRUD (Create, Read, Update, Delete) API for managing users, utilizing the Observer design pattern to automatically generate slugs for user names.

## How the Observer Pattern is Applied
The Observer pattern is a behavioral design pattern that defines a one-to-many relationship between objects. In this implementation, we use the Observer pattern to automatically generate username whenever a new user is created. This allows for decoupling the slug generation logic from the User model, enhancing code separation and maintainability.

### Creating the Observer:
An observer class (`UserObserver`) is created in `app/Observers` directory. This class listens for the `creating` event on the User model and generates a unique slug based on the user's name using Laravel's `Str::slug()` method.

### Registering the Observer:
The `UserObserver` is registered with the `User` model in the `AppServiceProvider` (`app/Providers/AppServiceProvider.php`). This ensures that the observer is notified when a new user is being created.

### Generating Username:
When a new user is created, the `UserObserver` automatically generates a unique slug based on the user's name and assigns it to the `username` attribute of the user.

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

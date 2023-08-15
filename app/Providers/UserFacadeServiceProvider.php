<?php

namespace App\Providers;

use App\Service\UserService;
use Illuminate\Support\ServiceProvider;

class UserFacadeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('user-facade', function () {
            return new UserService();
        });
    }
}

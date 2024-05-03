<?php

namespace App\Providers;

// use App\Extensions\MongoUserProvider;
// use Illuminate\Contracts\Foundation\Application;
// use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Auth;
use App\Extensions\MongoUserProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use MongoDB\Laravel\MongoDBServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        // Auth::provider('mongodb', function (Application $app, array $config) {
        // //     // Return an instance of Illuminate\Contracts\Auth\UserProvider...
 
        // return new AppServiceProvider($app->make('mongodb.connection'));
        //  });
       
      
    }
}

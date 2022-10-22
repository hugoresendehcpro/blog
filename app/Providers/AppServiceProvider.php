<?php

namespace App\Providers;

use App\Http\MyClasses\GoogleDriveImage;
use App\interfaces\ImageManage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Depending on the controller that makes the request to the interface a different implementation will be provided.
        //https://www.hibit.dev/posts/51/interfaces-binding-with-implementations-in-laravel
        $this->app->bind(ImageManage::class, GoogleDriveImage::class);

        $this->app->when(BusController::class)
            ->needs(Vehicle::class)
            ->give(function () {
                return new Bus();
            });

        $this->app->when(CarController::class)
            ->needs(Vehicle::class)
            ->give(function () {
                return new Car();
            });

        $this->app->when(MotorcycleController::class)
            ->needs(Vehicle::class)
            ->give(function () {
                return new Motorcycle();

            });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

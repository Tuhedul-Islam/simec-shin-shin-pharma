<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        /**
            view()->share('data', [1, 2, 3]);
            view()->composer('*', function ($view)
            {
                $user = User::all();
                $view->with('user', $user);
            });

            app()->singleton('created-new-binding1', function (){
                dd('created new binding1 ... ');
            });
            app()->bind('created-new-binding2', function (){
                dd('created new binding2 ... ');
            });
        **/
    }
}

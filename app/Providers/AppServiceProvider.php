<?php

namespace App\Providers;


use App\Http\Controllers\EmployeeController;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();

        /**
            view()->share('data', [1, 2, 3]);
            view()->composer('*', function ($view)
            {
                $user = User::all();
                $view->with('user', $user);
            });

            app()->singleton('created_new_binding1', function (){
                dd('created new binding1 ... ');
            });
            app()->bind('created_new_binding2', function (){
                dd('created new binding2 ... ');
            });
        **/
    }
}

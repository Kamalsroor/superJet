<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contacte;

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
        // $Contacte = Contacte::get();.
        
        view()->composer('*', function ($view)
        {
            $Contacte = Contacte::with('translations')->get()->translate(app()->getLocale());
            // dd(Contacte::get());

            $view->with('Contacte', $Contacte );
    
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

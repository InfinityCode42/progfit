<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\AdmModulos;

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
    public function boot()
    {

        view()->composer('includes.sidebar', function ($view) {
            $admModulos = AdmModulos::all();
            $view->with('admModulos', $admModulos);
        });
    }
}

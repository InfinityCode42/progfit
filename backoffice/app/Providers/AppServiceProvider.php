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
    view()->composer('sidebar.sidebar', function ($view) {
        $admModulos = AdmModulos::all();

        // Ordenar os dados pelo campo 'nome_primario'
        $admModulos = $admModulos->sortBy('nome_primario');

        // Agrupar os itens pelo campo 'nome_primario'
        $itensAgrupados = $admModulos->groupBy('nome_primario');

        $view->with('admModulos', $itensAgrupados);
    });
}

}

<?php

namespace App\Providers;

use App\Models\departamento;
use Exception;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use PhpParser\Node\Stmt\TryCatch;

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
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();

        try{
        $departamentos = departamento::select('id', 'nome')->orderBy('nome', 'asc')->get();
        view()->share('departamentos', $departamentos);
        }catch(Exception $e){
            echo "Exceção capturada no boot: ". $e->getMessage();
        }
    }
}

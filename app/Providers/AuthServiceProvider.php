<?php

namespace App\Providers;

use App\User;
use App\Policies\PoliticaUsuario;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
       // 'App\User' => 'App\Policies\PoliticaUsuario' // agrego el policy q cree al modelo User
        User::class => PoliticaUsuario::class   // lo mismo q arriba pero con otra sintaxis
        // el modelo User esta asociado al la politica de acceso PoliticaUsuario
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }


}

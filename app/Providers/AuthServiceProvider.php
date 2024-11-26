<?php

namespace App\Providers;


// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Symfony\Component\HttpFoundation\AcceptHeader;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }


    //Politicas de acceso si no tien epermisos no podra Acceder a las vistas

    public function view(User $user)
{
    return $user->hasRole('admin');
}

public function create(User $user)
{
    return $user->hasRole('admin');
}

public function edit(User $user)
{
    return $user->hasRole('admin');
}
}

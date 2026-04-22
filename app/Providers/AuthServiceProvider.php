<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\AlumniPolicy;
use App\Models\AlumniProfile;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        AlumniProfile::class => AlumniPolicy::class,
    ];

    public function boot(): void
    {
        //
    }
}
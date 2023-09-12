<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\bulanHelper;

use App\Models\User;
use Illuminate\Support\Facades\Gate;


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
        Gate::define('isAdmin', function (User $user) {
            // jika yang login adalah admin maka beri nilai true di fild is_admin di dalam tabel user
            // if ($user->isAdmin()) {
            //     return true;
            // } else if (!$user->isAdmin()) {
            //     return false;
            // }
            if ($user->Admin()) {
                return true;
            } else if (!$user->Admin()) {
                return false;
            }
        });
    }
}

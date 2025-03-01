<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        
    }


    public function boot(): void
    {
        Paginator::defaultView('pagination.bootstrap-5');
        Paginator::defaultSimpleView('pagination.simple-bootstrap-5');
    }
}

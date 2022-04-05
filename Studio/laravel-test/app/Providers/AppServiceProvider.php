<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use App\Models\aocuoi;
use App\Models\anhcuoi;
use App\Models\BillsAoCuoi;
use App\Models\BillsAoCuoiDetail;
use App\Models\Cart;
use App\Models\CartAnhCuoi;
use Illuminate\Support\Facades\Auth;

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
        Paginator::useBootstrap();

        view()->composer('*', function ($view) {
            $view->with([
                'carts' => new Cart(),
                'carts2' => new CartAnhCuoi(),
            ]);
        });
    }
}

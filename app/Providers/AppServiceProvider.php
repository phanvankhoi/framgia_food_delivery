<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Order;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer(['admin.layouts.master'], function($view){
            $pendingEventCount = count(Order::where('status', config('setup.pending'))->get());
                if ($pendingEventCount) {
                    $view->with('pendingEventCount', $pendingEventCount);
                }
        });    

        view()->composer(['admin.layouts.master'], function($view){
            $orderTime = Order::where('status', config('setup.pending'))->get();

            if ($orderTime) {

                $view->with('orderTime', $orderTime);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

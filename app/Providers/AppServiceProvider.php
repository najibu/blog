<?php

namespace App\Providers;

use App\Billing\Stripe;
use App\Post;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.sidebar', function ($view) {
            $view->with('archives', Post::archives());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Stripe::class, function () {
            return new Stripe(config('services.stripe.secret'));
        });
    }
}

<?php

namespace App\Providers;

// use App\Model\Category;
use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\View;
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
        Schema::defaultStringLength(191);
        // $categories = Category::with(['products'])->get();
        // View::share('categories',$categories);
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

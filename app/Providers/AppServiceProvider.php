<?php

namespace App\Providers;

use App\Category;
use App\SubCategory;
use Illuminate\Support\ServiceProvider;

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
        
        view()->composer('*', function ($view) {

            $view->with([

                'CategoryMaster' =>  Category::with('subCategiries')->get(),
                'SubcategoryMaster'     =>  SubCategory::all(),
                

            ]);
        });
    }
}

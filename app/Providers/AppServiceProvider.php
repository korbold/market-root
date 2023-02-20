<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use App\CentralLogics\Helpers;

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

        try
        {
            if(config('app.env') !== 'local') {
                URL::forceScheme('https');
            }
            Paginator::useBootstrap();
            foreach(Helpers::get_view_keys() as $key=>$value)
            {
                view()->share($key, $value);
            }
        }
        catch(\Exception $e)
        {

        }

    }
}

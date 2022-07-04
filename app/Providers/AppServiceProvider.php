<?php

namespace App\Providers;

use App\Models\Admin\Setting\BackgroundMedia;
use App\Models\Admin\Setting\InformationSetup;
use Illuminate\Support\Facades\View as View;
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
        $g_info = InformationSetup::first();

        if($g_info){
            View::share('g_info', $g_info);
        }

        $g_bgmedia = BackgroundMedia::first();
        if($g_bgmedia) {
            View::share('g_bgmedia', $g_bgmedia);
        }
    }
}

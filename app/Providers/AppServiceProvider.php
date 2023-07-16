<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\WebSetting\Entities\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        $setting = Setting::find(1);
        view()->share('setting', $setting);

    }
}

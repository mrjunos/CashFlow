<?php

namespace App\Providers;

use Blade;

use Carbon\Carbon;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {

        Carbon::setLocale(config('app.locale'));

        Blade::directive('currency', function ($money) {
            return "<?php echo '$' . number_format($money, 2); ?>";
        });

        Blade::directive('descriptiveDate', function ($date) {
            return "<?php echo date_format($date, 'l d \\- F'); ?>";
        });

        Blade::directive('dayDate', function ($date) {
            return "<?php echo date_format($date, 'l'); ?>";
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

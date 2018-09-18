<?php

namespace CashFlow\Providers;

use Blade;

use Carbon\Carbon;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot() {

        Blade::directive('currency', function ($money) {
            return "<?php echo '$' . number_format($money, 2); ?>";
        });
    }

    public function register() {}
}

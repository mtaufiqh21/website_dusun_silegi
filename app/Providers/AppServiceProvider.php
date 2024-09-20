<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        DB::listen(function($query) {
            Log::info("Query : " . $query->sql);
        });

        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });

        // view paginate
        Paginator::useBootstrapFour();
    }
}

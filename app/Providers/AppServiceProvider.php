<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{

    public $service = [
        \App\Http\Service\Siswa\ISiswaService::class => \App\Http\Service\Siswa\SiswaService::class,
        \App\Http\Service\Income\IIncomeService::class => \App\Http\Service\Income\IncomeService::class,
        
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->service as $interface => $service) {
            $this->app->bind($interface, $service);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
    }
}

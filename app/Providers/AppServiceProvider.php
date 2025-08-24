<?php

namespace App\Providers;

use App\Helpers\MoodHelper;
use Illuminate\Support\ServiceProvider;

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
        \Blade::directive('moodEmoji', function ($expression) {
            return "<?php echo App\Helpers\MoodHelper::getMoodEmoji($expression); ?>";
        });
    }
}

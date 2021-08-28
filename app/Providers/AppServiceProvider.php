<?php

namespace App\Providers;

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
        seo()
            ->title('Larajam.dev')
            ->description('A weekend-long hackathon for Laravel developers.')
            ->twitterTitle('Larajam.dev')
            ->twitterDescription('A weekend-long hackathon for Laravel developers.')
            ->image(
                asset('img/og-image.png')
            )
            ->twitterImage(
                asset('img/og-image.png')
            );
    }
}

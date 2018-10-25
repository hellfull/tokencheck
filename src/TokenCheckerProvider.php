<?php
namespace hellfull\TokenChecker;
use Illuminate\Support\ServiceProvider;
class TokenCheckerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TokenChecker::class, function () {
            return new TokenChecker();
        });
        $this->app->alias(TokenChecker::class, 'tokenchecker');
    }
}
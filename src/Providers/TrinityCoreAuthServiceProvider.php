<?php

namespace ThibaudDT\TrinityCoreAuth\Providers;

use Auth;
use Illuminate\Contracts\Auth\Guard as IlluminateGuard;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Hashing\Hasher as IlluminateHasher;
use Illuminate\Support\ServiceProvider;
use ThibaudDT\TrinityCoreAuth\Guard\TrinityCoreGuard;
use ThibaudDT\TrinityCoreAuth\Hashing\TrinityCoreHasher;
use ThibaudDT\TrinityCoreAuth\Models\Auth\Account;
use ThibaudDT\TrinityCoreAuth\TrinityCore;

/**
 * Class TrinityCoreServiceProvider
 *
 * @category Provider
 * @package  ThibaudDT\TrinityCoreAuth\Providers
 * @author   Thibaud DELOBELLE TOUSSAINT <thibaud@d-t.fr>
 * @license  GNU
 * @link     https://github.com/Thibaud-DT/trinitycore-auth
 */
class TrinityCoreAuthServiceProvider extends ServiceProvider
{


    /**
     * Illuminate Filesystem
     *
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $filesystem;

    public function __construct(Application $application)
    {
        parent::__construct($application);
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerAuthProvider();

        $this->publishConfigs();

        $this->publishMigrations();
    }

    /**
     * Registers the Auth provider for authentication against TrinityCore Account(s).
     * if desired, this can be used as default by changing the value(s) in config auth.php
     *
     * @return void
     */
    protected function registerAuthProvider()
    {
        Auth::provider('trinitycore', function (Application $app) {
            return new AccountProvider($app->make(IlluminateHasher::class), $app->make(Account::class));
        });
    }

    /**
     * Publishes the config stub(s)
     *
     * @return void
     */
    protected function publishConfigs()
    {
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('trinitycore-auth.php'),
        ]);
    }

    private function publishMigrations()
    {
        $path = __DIR__ . '/../../database/migrations/';
        $timestamp = date('Y_m_d_His', time());
        $this->publishes([
            $path . 'alter_account_table.php.stub' => database_path('migrations') . "{$timestamp}_alter_account_table.php",
        ], 'migrations');
    }

    /**
     * Register bindings in the container.
     *
     *
     * @return void
     */
    public function register()
    {
        // Bind and tag our Auth components.
        $this->app->bind(IlluminateHasher::class, TrinityCoreHasher::class);
        $this->app->tag(IlluminateHasher::class, 'TrinityCore');

        $this->app->bind(IlluminateGuard::class, TrinityCoreGuard::class);
        $this->app->tag(IlluminateGuard::class, 'TrinityCore');

        // $this->app->bind(IlluminateGuard::class, TrinityCoreGuard::class);
        $this->app->bind('trinitycore', function () {
            return new TrinityCore();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     *
     * @return array
     */
    public function provides()
    {
        return [
            TrinityCoreHasher::class,
            TrinityCoreGuard::class
        ];
    }
}

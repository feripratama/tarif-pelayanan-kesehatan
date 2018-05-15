<?php namespace Bantenprov\TarifPelayananKesehatan;

use Illuminate\Support\ServiceProvider;
use Bantenprov\TarifPelayananKesehatan\Console\Commands\TarifPelayananKesehatanCommand;

/**
 * The TarifPelayananKesehatanServiceProvider class
 *
 * @package Bantenprov\TarifPelayananKesehatan
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TarifPelayananKesehatanServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('tarif-pelayanan-kesehatan', function ($app) {
            return new TarifPelayananKesehatan;
        });

        $this->app->singleton('command.tarif-pelayanan-kesehatan', function ($app) {
            return new TarifPelayananKesehatanCommand;
        });

        $this->commands('command.tarif-pelayanan-kesehatan');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'tarif-pelayanan-kesehatan',
            'command.tarif-pelayanan-kesehatan',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('tarif-pelayanan-kesehatan.php');

        $this->mergeConfigFrom($packageConfigPath, 'tarif-pelayanan-kesehatan');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'tarif-pelayanan-kesehatan');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/tarif-pelayanan-kesehatan'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'tarif-pelayanan-kesehatan');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/tarif-pelayanan-kesehatan'),
        ], 'views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => public_path('vendor/tarif-pelayanan-kesehatan'),
        ], 'public');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }
}

<?php
/**
 *
 * (c) Wolfred Montilla <wolfrednicolas@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace wnmd1987\serviceinfrastructure;

use Illuminate\Support\ServiceProvider;

/**
 * Class definition of InfrastructureServiceProvider.
 */
class InfrastructureServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerMigrations();
    }

    /**
     * Register Passport's migration files.
     *
     * @return void
     */
    protected function registerMigrations()
    {

        return $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

    }


}
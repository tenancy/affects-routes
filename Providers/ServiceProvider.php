<?php

/*
 * This file is part of the tenancy/tenancy package.
 *
 * (c) Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see http://laravel-tenancy.com
 * @see https://github.com/tenancy
 */

namespace Tenancy\Affects\Routes\Providers;

use Tenancy\Affects\Routes\Listeners\ConfiguresRoutes;
use Tenancy\Identification\Support\DriverProvider;

class ServiceProvider extends DriverProvider
{
    protected $affects = [ConfiguresRoutes::class];
}

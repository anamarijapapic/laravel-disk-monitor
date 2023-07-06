<?php

namespace AnamarijaPapic\DiskMonitor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AnamarijaPapic\DiskMonitor\DiskMonitor
 */
class DiskMonitor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AnamarijaPapic\DiskMonitor\DiskMonitor::class;
    }
}

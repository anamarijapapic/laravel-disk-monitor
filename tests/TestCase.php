<?php

namespace AnamarijaPapic\DiskMonitor\Tests;

use AnamarijaPapic\DiskMonitor\DiskMonitorServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'AnamarijaPapic\\DiskMonitor\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );

        Route::diskMonitor('disk-monitor');
    }

    protected function getPackageProviders($app)
    {
        return [
            DiskMonitorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        $migration = include __DIR__.'/../database/migrations/create_disk_monitor_table.php.stub';
        $migration->up();
    }
}

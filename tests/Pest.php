<?php

use AnamarijaPapic\DiskMonitor\Tests\TestCase;
use Illuminate\Support\Facades\Storage;

uses(TestCase::class)
    ->beforeEach(function () {
        Storage::fake('local');
        Storage::fake('anotherDisk');
    })
    ->in('Feature');

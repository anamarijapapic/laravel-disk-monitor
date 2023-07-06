<?php

use AnamarijaPapic\DiskMonitor\Commands\RecordDiskMetricsCommand;
use AnamarijaPapic\DiskMonitor\Models\DiskMonitorEntry;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use function Pest\Laravel\artisan;

it('will record zero files for empty disks', function () {
    artisan(RecordDiskMetricsCommand::class)
        ->assertExitCode(Command::SUCCESS);

    expect(DiskMonitorEntry::get())->toHaveCount(1);

    $entry = DiskMonitorEntry::get()->last();
    expect($entry->file_count)->toBe(0);
});

it('will record the file count for a single disk', function () {
    artisan(RecordDiskMetricsCommand::class)->assertExitCode(Command::SUCCESS);
    $entry = DiskMonitorEntry::get()->last();
    expect($entry->file_count)->toBe(0);

    Storage::disk('local')->put('test.txt', 'test');
    artisan(RecordDiskMetricsCommand::class)->assertExitCode(Command::SUCCESS);
    $entry = DiskMonitorEntry::get()->last();
    expect($entry->file_count)->toBe(1);
});

it('will record the file count for multiple disks', function () {
    config()->set('disk-monitor.disk_names', ['local', 'anotherDisk']);
    Storage::disk('anotherDisk')->put('test.txt', 'test');

    artisan(RecordDiskMetricsCommand::class)->assertExitCode(Command::SUCCESS);

    $entries = DiskMonitorEntry::get();
    expect($entries)->toHaveCount(2);

    expect($entries[0]->disk_name)->toBe('local');
    expect($entries[0]->file_count)->toBe(0);
    expect($entries[1]->disk_name)->toBe('anotherDisk');
    expect($entries[1]->file_count)->toBe(1);
});

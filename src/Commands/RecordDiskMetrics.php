<?php

namespace AnamarijaPapic\DiskMonitor\Commands;

use Illuminate\Console\Command;

class RecordDiskMetrics extends Command
{
    public $signature = 'disk-monitor:record-metrics';

    public $description = 'Record the metrics of the disk';

    public function handle(): int
    {
        $this->comment('Recording metrics...');

        $this->comment('All done');

        return self::SUCCESS;
    }
}

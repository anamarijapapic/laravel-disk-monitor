<?php

namespace AnamarijaPapic\DiskMonitor\Http\Controllers;

use AnamarijaPapic\DiskMonitor\Models\DiskMonitorEntry;

class DiskMetricsController
{
    public function __invoke()
    {
        $entries = DiskMonitorEntry::latest()->get();

        return view('disk-monitor::entries', compact('entries'));
    }
}

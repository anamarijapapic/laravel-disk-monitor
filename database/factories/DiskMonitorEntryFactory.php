<?php

namespace AnamarijaPapic\DiskMonitor\Database\Factories;

use AnamarijaPapic\DiskMonitor\Models\DiskMonitorEntry;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiskMonitorEntryFactory extends Factory
{
    protected $model = DiskMonitorEntry::class;

    public function definition(): array
    {
        return [
            'disk_name' => $this->faker->word,
            'file_count' => rand(0, 10),
        ];
    }
}

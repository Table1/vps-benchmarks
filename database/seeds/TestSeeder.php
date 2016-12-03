<?php

use App\Test;
use App\TestSuite;

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sysbench = TestSuite::where('name', 'sysbench')->first();
        $speedtest = TestSuite::where('name', 'Speedtest')->first();

        $test_suites = [
            $sysbench->id => [
                [
                    'name' => 'CPU',
                    'metric' => 'Execution Time',
                    'unit' => 's'
                ],
                [
                    'name' => 'CPU',
                    'metric' => 'Minimum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'CPU',
                    'metric' => 'Average Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'CPU',
                    'metric' => 'Maximum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'Memory (Read)',
                    'metric' => 'Execution Time',
                    'unit' => 's'
                ],
                [
                    'name' => 'Memory (Read)',
                    'metric' => 'Minimum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'Memory (Read)',
                    'metric' => 'Average Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'Memory (Read)',
                    'metric' => 'Maximum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'Memory (Read)',
                    'metric' => 'MB/sec',
                ],
                [
                    'name' => 'Memory (Write)',
                    'metric' => 'Execution Time',
                    'unit' => 's'
                ],
                [
                    'name' => 'Memory (Write)',
                    'metric' => 'Minimum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'Memory (Write)',
                    'metric' => 'Average Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'Memory (Write)',
                    'metric' => 'Maximum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'Memory (Write)',
                    'metric' => 'MB/sec',
                ],
                [
                    'name' => 'File I/O',
                    'metric' => 'Execution Time',
                    'unit' => 's'
                ],
                [
                    'name' => 'File I/O',
                    'metric' => 'Minimum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'File I/O',
                    'metric' => 'Average Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'File I/O',
                    'metric' => 'Maximum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'File I/O',
                    'metric' => 'Requests/sec',
                ],
                [
                    'name' => 'MySQL OLTP',
                    'metric' => 'Execution Time',
                    'unit' => 's'
                ],
                [
                    'name' => 'MySQL OLTP',
                    'metric' => 'Minimum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'MySQL OLTP',
                    'metric' => 'Average Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'MySQL OLTP',
                    'metric' => 'Maximum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'MySQL OLTP',
                    'metric' => 'Read/write Requests/sec',
                ],
            ],
            $speedtest->id => [
                [
                    'name' => 'Download',
                    'metric' => 'Mbit/sec',
                ],
                [
                    'name' => 'Upload',
                    'metric' => 'Mbit/sec',
                ],                
            ],
        ];

        foreach($test_suites as $test_suite_id => $tests) {
            $test_suite = TestSuite::find($test_suite_id);

            foreach($tests as $test) {
                $test['test_suite_id'] = $test_suite->id;
                Test::create($test);
            }
        }
    }
}

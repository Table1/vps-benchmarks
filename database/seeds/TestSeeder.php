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
        $geekbench = TestSuite::where('name', 'Geekbench')->first();
        $redis_benchmark = TestSuite::where('name', 'Redis Benchmark')->first();
        $speedtest = TestSuite::where('name', 'Speedtest')->first();

        $test_suites = [
            $sysbench->id => [
                [
                    'name' => 'CPU',
                    'measure' => 'Execution Time',
                    'unit' => 's'
                ],
                [
                    'name' => 'CPU',
                    'measure' => 'Minimum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'CPU',
                    'measure' => 'Average Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'CPU',
                    'measure' => 'Maximum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'Memory (Read)',
                    'measure' => 'Execution Time',
                    'unit' => 's'
                ],
                [
                    'name' => 'Memory (Read)',
                    'measure' => 'Minimum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'Memory (Read)',
                    'measure' => 'Average Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'Memory (Read)',
                    'measure' => 'Maximum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'Memory (Read)',
                    'measure' => 'MB/sec',
                ],
                [
                    'name' => 'Memory (Write)',
                    'measure' => 'Execution Time',
                    'unit' => 's'
                ],
                [
                    'name' => 'Memory (Write)',
                    'measure' => 'Minimum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'Memory (Write)',
                    'measure' => 'Average Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'Memory (Write)',
                    'measure' => 'Maximum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'Memory (Write)',
                    'measure' => 'MB/sec',
                ],
                [
                    'name' => 'File I/O',
                    'measure' => 'Execution Time',
                    'unit' => 's'
                ],
                [
                    'name' => 'File I/O',
                    'measure' => 'Minimum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'File I/O',
                    'measure' => 'Average Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'File I/O',
                    'measure' => 'Maximum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'File I/O',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'MySQL OLTP',
                    'measure' => 'Execution Time',
                    'unit' => 's'
                ],
                [
                    'name' => 'MySQL OLTP',
                    'measure' => 'Minimum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'MySQL OLTP',
                    'measure' => 'Average Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'MySQL OLTP',
                    'measure' => 'Maximum Request',
                    'unit' => 'ms'
                ],
                [
                    'name' => 'MySQL OLTP',
                    'measure' => 'Read/write Requests/sec',
                ],
            ],
            $speedtest->id => [
                [
                    'name' => 'Download',
                    'measure' => 'Mbit/sec',
                ],
                [
                    'name' => 'Upload',
                    'measure' => 'Mbit/sec',
                ],                
            ],
            $geekbench->id => [
                [
                    'name' => 'Single-core',
                ],
                [
                    'name' => 'Multi-core',
                ],                
            ],
            $redis_benchmark->id => [
                [
                    'name' => 'PING_INLINE',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'PING_BULK',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'SET',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'GET',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'INCR',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'LPUSH',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'LPOP',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'SADD',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'SPOP',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'LPUSH',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'LRANGE_100',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'LRANGE_300',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'LRANGE_500',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'LRANGE_600',
                    'measure' => 'Requests/sec',
                ],
                [
                    'name' => 'MSET',
                    'measure' => 'Requests/sec',
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

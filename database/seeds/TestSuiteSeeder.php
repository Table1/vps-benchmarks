<?php

use App\TestSuite;

use Illuminate\Database\Seeder;

class TestSuiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test_suites = [
            [
                'name' => 'sysbench',
                'url' => 'https://github.com/akopytov/sysbench'
            ],
            [
                'name' => 'Geekbench',
                'url' => 'http://geekbench.com/'
            ],
            [
                'name' => 'Speedtest',
                'url' => 'https://github.com/sivel/speedtest-cli'
            ],
        ];

        foreach($test_suites as $test_suite) {
            TestSuite::create($test_suite);
        }
    }
}

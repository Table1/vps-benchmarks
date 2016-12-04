<?php

use App\Test;
use App\PerformanceCategory;

use Illuminate\Database\Seeder;

class PerformanceCategoryTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $performance_categories_and_tests = [
            [
                'performance_category' => 'Compute',
                'test_stub_names' => [
                    'CPU',
                    '-core',
                ],
            ],
            [
                'performance_category' => 'Memory',
                'test_stub_names' => [
                    'Memory',
                    'MySQL',
                    'PING_INLINE',
                    'PING_BULK',
                    'SET',
                    'GET',
                    'INCR',
                    'LPUSH',
                    'LPOP',
                    'SADD',
                    'SPOP',
                    'LPUSH',
                    'LRANGE_100',
                    'LRANGE_300',
                    'LRANGE_500',
                    'LRANGE_600',
                    'MSET',
                ],
            ],
            [
                'performance_category' => 'Disk',
                'test_stub_names' => [
                    'File',
                    'MySQL',
                ],
            ],
            [
                'performance_category' => 'Network',
                'test_stub_names' => [
                    'Download',
                    'Upload',
                ],
            ],
        ];

        foreach($performance_categories_and_tests as $pairing) {
            $performance_category = PerformanceCategory::where('name', $pairing['performance_category'])
                ->first();

            foreach($pairing['test_stub_names'] as $test_stub_name) {
                $tests = Test::where('name', 'LIKE', "%$test_stub_name%")
                    ->get();

                if($tests) {
                    foreach($tests as $test) {
                        $test->performanceCategories()->attach($performance_category);                        
                    }
                }
            }
        }    
    }
}

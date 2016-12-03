<?php

use App\Service;
use App\PerformanceCategory;

use Illuminate\Database\Seeder;

class PerformanceCategoryServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $performance_categories_and_services = [
            [
                'performance_category' => 'Compute',
                'service_stub_names' => [
                    'SQL',
                    'MariaDB',
                    'Redis',
                    'memcached',
                ],
            ],
            [
                'performance_category' => 'Memory',
                'service_stub_names' => [
                    'SQL',
                    'MariaDB',
                    'Redis',
                    'memcached',
                ],
            ],
            [
                'performance_category' => 'Disk',
                'service_stub_names' => [
                    'SQL',
                    'MariaDB',
                ],
            ],
            [
                'performance_category' => 'Network',
                'service_stub_names' => [
                    'SQL',
                    'MariaDB',
                    'Redis',
                    'memcached',
                ],
            ],
        ];

        foreach($performance_categories_and_services as $pairing) {
            $performance_category = PerformanceCategory::where('name', $pairing['performance_category'])
                ->first();

            foreach($pairing['service_stub_names'] as $service_stub_name) {
                $services = Service::where('name', 'LIKE', "%$service_stub_name%")
                    ->get();

                if($services) {
                    foreach($services as $service) {
                        $service->performanceCategories()->attach($performance_category);                        
                    }
                }
            }
        }
    }
}

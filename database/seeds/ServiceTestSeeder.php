<?php

use App\Test;
use App\Service;

use Illuminate\Database\Seeder;

class ServiceTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services_and_tests = [
            [
                'service_stub_name' => 'Redis',
                'test_stub_names' => [
                    'CPU',
                    '-core',
                ],
            ],
            [
                'service_stub_name' => 'Redis',
                'test_stub_names' => [
                    'Memory',
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
                'service_stub_name' => 'SQL',
                'test_stub_names' => [
                    'Memory',
                    'File',
                    'MySQL',
                ],
            ],
            [
                'service_stub_name' => 'MariaDB',
                'test_stub_names' => [
                    'Memory',
                    'File',
                    'MySQL',
                ],
            ],
        ];

        foreach($services_and_tests as $pairing) {
            $services = Service::where('name', 'LIKE', '%' . $pairing['service_stub_name'] .'%')
                ->get();

            foreach($services as $service) {
                foreach($pairing['test_stub_names'] as $test_stub_name) {
                    $tests = Test::where('name', 'LIKE', "%$test_stub_name%")
                        ->get();

                    if($tests) {
                        foreach($tests as $test) {
                            $service->tests()->attach($service);                        
                        }
                    }
                }                
            }

        }   
    }
}

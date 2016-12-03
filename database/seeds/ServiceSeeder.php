<?php

use App\Service;

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services  = [
            [
                'name' => 'Oracle MySQL',
                'version' => '5.5',
            ],
            [
                'name' => 'Oracle MySQL',
                'version' => '5.6',
            ],
            [
                'name' => 'Oracle MySQL',
                'version' => '5.7',
            ],
            [
                'name' => 'Percona MySQL',
                'version' => '5.5',
            ],
            [
                'name' => 'Percona MySQL',
                'version' => '5.6',
            ],
            [
                'name' => 'Percona MySQL',
                'version' => '5.7',
            ],
            [
                'name' => 'MariaDB',
                'version' => '10.0',
            ],
            [
                'name' => 'MariaDB',
                'version' => '10.1',
            ],
            [
                'name' => 'MariaDB',
                'version' => '10.2',
            ],
            [
                'name' => 'PostgreSQL',
                'version' => '9.2',
            ],
            [
                'name' => 'PostgreSQL',
                'version' => '9.3',
            ],
            [
                'name' => 'PostgreSQL',
                'version' => '9.4',
            ],
            [
                'name' => 'PostgreSQL',
                'version' => '9.5',
            ],
            [
                'name' => 'PostgreSQL',
                'version' => '9.6',
            ],            
            [
                'name' => 'Redis',
                'version' => '2.6',
            ],
            [
                'name' => 'Redis',
                'version' => '2.8',
            ],
            [
                'name' => 'Redis',
                'version' => '3.0',
            ],
            [
                'name' => 'Redis',
                'version' => '3.2',
            ],
            [
                'name' => 'memcached',
                'version' => '1.4',
            ],
        ];

        foreach($services as $service) {
            Service::create($service);
        }    
    }
}

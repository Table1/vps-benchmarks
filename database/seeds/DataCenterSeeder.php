<?php

use App\Company;
use App\DataCenter;

use Illuminate\Database\Seeder;

class DataCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linode = Company::where('name', 'Linode')->first();
        $aws = Company::where('name', 'Amazon Web Services')->first();
        $digital_ocean = Company::where('name', 'Digital Ocean')->first();
        $vultr = Company::where('name', 'Vultr')->first();
        $lightsail = Company::where('name', 'Amazon Lightsail')->first();

        $data_centers = [
            $linode->id => [
                [
                    'name' => 'US East',
                    'location' => 'Newark',
                    'country' => 'USA'
                ],
                [
                    'name' => 'US South',
                    'location' => 'Atlanta',
                    'country' => 'USA'
                ],
                [
                    'name' => 'US Central',
                    'location' => 'Dallas',
                    'country' => 'USA'
                ],
                [
                    'name' => 'US West',
                    'location' => 'Fremont',
                    'country' => 'USA'
                ],
                [
                    'name' => 'Frankfurt',
                    'location' => 'Frankfurt',
                    'country' => 'Germany'
                ],
                [
                    'name' => 'London',
                    'location' => 'London',
                    'country' => 'United Kingdom'
                ],
                [
                    'name' => 'Singapore',
                    'location' => 'Singapore',
                    'country' => 'Singapore'
                ],
                [
                    'name' => 'Tokyo 1',
                    'location' => 'Tokyo',
                    'country' => 'Japan'
                ],
                [
                    'name' => 'Tokyo 2',
                    'location' => 'Tokyo',
                    'country' => 'Japan'
                ],
            ],
            $aws->id => [
                [
                    'name' => 'US East 1',
                    'location' => 'Northern Virginia',
                    'country' => 'USA'
                ],
                [
                    'name' => 'US East 2',
                    'location' => 'Ohio',
                    'country' => 'USA'
                ],            
                [
                    'name' => 'US West 1',
                    'location' => 'Northern California',
                    'country' => 'USA'
                ],            
                [
                    'name' => 'US West 2',
                    'location' => 'Oregon',
                    'country' => 'USA'
                ],            
                [
                    'name' => 'EU West 1',
                    'location' => 'Ireland',
                    'country' => 'Ireland'
                ],
                [
                    'name' => 'EU Central 1',
                    'location' => 'Frankfurt',
                    'country' => 'Germany'
                ],
                [
                    'name' => 'AP Northeast 1',
                    'location' => 'Tokya',
                    'country' => 'Japan'
                ],
                [
                    'name' => 'AP Northeast 2',
                    'location' => 'Seoul',
                    'country' => 'South Korea'
                ],
                [
                    'name' => 'AP Southeast 1',
                    'location' => 'Singapore',
                    'country' => 'Singapore'
                ],
                [
                    'name' => 'AP Southeast 2',
                    'location' => 'Sydney',
                    'country' => 'Australia'
                ],
                [
                    'name' => 'AP South 1',
                    'location' => 'Mumbai',
                    'country' => 'India'
                ],
                [
                    'name' => 'SA East 1',
                    'location' => 'São Paulo',
                    'country' => 'Brazil'
                ],
            ],
            $digital_ocean->id => [
                [
                    'name' => 'New York 1',
                    'location' => 'New York',
                    'country' => 'USA'
                ],
                [
                    'name' => 'New York 2',
                    'location' => 'New York',
                    'country' => 'USA'
                ],
                [
                    'name' => 'New York 3',
                    'location' => 'New York',
                    'country' => 'USA'
                ],
                [
                    'name' => 'San Francisco 1',
                    'location' => 'San Francisco',
                    'country' => 'USA'
                ],
                [
                    'name' => 'San Francisco 2',
                    'location' => 'San Francisco',
                    'country' => 'USA'
                ],
                [
                    'name' => 'Amsterdam 1',
                    'location' => 'Amsterdam',
                    'country' => 'Netherlands'
                ],
                [
                    'name' => 'Amsterdam 2',
                    'location' => 'Amsterdam',
                    'country' => 'Netherlands'
                ],
                [
                    'name' => 'Amsterdam 3',
                    'location' => 'Amsterdam',
                    'country' => 'Netherlands'
                ],
                [
                    'name' => 'Singapore 1',
                    'location' => 'Singapore',
                    'country' => 'Singapore'
                ],
                [
                    'name' => 'London 1',
                    'location' => 'London',
                    'country' => 'United Kingdom'
                ],
                [
                    'name' => 'Frankfurt 1',
                    'location' => 'Frankfurt',
                    'country' => 'Germany'
                ],
                [
                    'name' => 'Toronto 1',
                    'location' => 'Toronto',
                    'country' => 'Canada'
                ],
                [
                    'name' => 'Bangalore 1',
                    'location' => 'Bangalore',
                    'country' => 'India'
                ],
            ],
            $vultr->id => [
                [
                    'name' => 'Atlanta',
                    'location' => 'Atlanta',
                    'country' => 'USA'
                ],
                [
                    'name' => 'Chicago',
                    'location' => 'Chicago',
                    'country' => 'USA'
                ],
                [
                    'name' => 'Dallas',
                    'location' => 'Dallas',
                    'country' => 'USA'
                ],
                [
                    'name' => 'Los Angeles',
                    'location' => 'Los Angeles',
                    'country' => 'USA'
                ],
                [
                    'name' => 'Miami',
                    'location' => 'Miami',
                    'country' => 'USA'
                ],
                [
                    'name' => 'New Jersey',
                    'location' => 'New Jersey',
                    'country' => 'USA'
                ],
                [
                    'name' => 'Seattle',
                    'location' => 'Seattle',
                    'country' => 'USA'
                ],
                [
                    'name' => 'Silicon Valley',
                    'location' => 'Silicon Valley',
                    'country' => 'USA'
                ],
                [
                    'name' => 'Singapore',
                    'location' => 'Singapore',
                    'country' => 'Singapore'
                ],
                [
                    'name' => 'Amsterdam',
                    'location' => 'Amsterdam',
                    'country' => 'Netherlands'
                ],
                [
                    'name' => 'Tokyo',
                    'location' => 'Tokyo',
                    'country' => 'Japan'
                ],
                [
                    'name' => 'London',
                    'location' => 'London',
                    'country' => 'United Kingdom'
                ],
                [
                    'name' => 'Paris',
                    'location' => 'Paris',
                    'country' => 'France'
                ],
                [
                    'name' => 'Frankfurt',
                    'location' => 'Frankfurt',
                    'country' => 'Germany'
                ],
                [
                    'name' => 'Sydney',
                    'location' => 'Sydney',
                    'country' => 'Australia'
                ],                
            ],
            $lightsail->id => [
                [
                    'name' => 'US East 1',
                    'location' => 'Northern Virginia',
                    'country' => 'USA'
                ],
            ],

        ];

        foreach($data_centers as $company_id => $data_centers) {
            $company = Company::find($company_id);

            foreach($data_centers as $data_center) {
                $data_center['company_id'] = $company->id;
                DataCenter::create($data_center);
            }
        }

    }
}

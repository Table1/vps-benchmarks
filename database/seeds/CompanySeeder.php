<?php

use App\Company;

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            [
                'name' => 'Linode',
                'url' => 'https://www.linode.com/',
                'year_founded' => 2003,
                'developer_friendly' => 1
            ],        
            [
                'name' => 'Amazon Web Services',
                'url' => 'https://aws.amazon.com/',
                'year_founded' => 2006,
                'developer_friendly' => 1
            ],
            [
                'name' => 'Digital Ocean',
                'url' => 'https://www.digitalocean.com/',
                'year_founded' => 2011,
                'developer_friendly' => 1
            ],
            [
                'name' => 'Vultr',
                'url' => 'https://www.vultr.com/',
                'year_founded' => 2014,
                'developer_friendly' => 1
            ],
            [
                'name' => 'Amazon Lightsail',
                'url' => 'https://www.amazonlightsail.com/',
                'year_founded' => 2016,
                'developer_friendly' => 1
            ],        
            [
                'name' => 'DreamHost',
                'url' => 'https://www.dreamhost.com/',
                'year_founded' => 1996,
                'developer_friendly' => 0
            ],        
            [
                'name' => 'GoDaddy',
                'url' => 'https://www.godaddy.com/',
                'year_founded' => 1997,
                'developer_friendly' => 0
            ],        
            [
                'name' => 'Rackspace',
                'url' => 'https://www.rackspace.com/',
                'year_founded' => 1998,
                'developer_friendly' => 0
            ],        
            [
                'name' => 'HostGator',
                'url' => 'https://www.hostgator.com/',
                'year_founded' => 2002,
                'developer_friendly' => 0
            ],
            [
                'name' => 'Bluehost',
                'url' => 'https://www.bluehost.com/',
                'year_founded' => 2003,
                'developer_friendly' => 0
            ],

        ];

        foreach($companies as $company) {
            $company['slug'] = str_slug($company['name']);
            Company::create($company);
        }
    }
}

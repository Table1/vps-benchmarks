<?php

use App\OperatingSystem;

use Illuminate\Database\Seeder;

class OperatingSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $operating_systems = [
            [
                'name' => 'Amazon Linux',
                'last_major_version' => '2016.09',
            ],
            [
                'name' => 'Arch',
            ],
            [
                'name' => 'CentOS',
                'last_major_version' => '7',
            ],
            [
                'name' => 'CoreOS',
            ],
            [
                'name' => 'Debian',
                'last_major_version' => '8',
            ],
            [
                'name' => 'Fedora',
                'last_major_version' => '25',                
            ],
            [
                'name' => 'FreeBSD',
                'last_major_version' => '11.0',                
            ],
            [
                'name' => 'Gentoo',
            ],
            [
                'name' => 'Windows Server',
                'last_major_version' => '2016',
            ],
            [
                'name' => 'Red Hat Enterprise Linux',
                'last_major_version' => '7.3',
            ],
            [
                'name' => 'openSUSE',
                'last_major_version' => 'Leap 42.2',
            ],
            [
                'name' => 'Slackware',
                'last_major_version' => '12.2',
            ],
            [
                'name' => 'SUSE Linux Enterprise Server',
                'last_major_version' => '12',
            ],
            [
                'name' => 'Ubuntu',
                'last_major_version' => '16.10',
                'last_lts_version' => '16.04'
            ],
        ];

        foreach($operating_systems as $os) {
            OperatingSystem::create($os);
        }

    }
}

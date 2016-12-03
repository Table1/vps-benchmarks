<?php

use App\Company;
use App\OperatingSystem;

use Illuminate\Database\Seeder;

class OperatingSystemCompanySeeder extends Seeder
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

        $companies_operating_systems = [
            $linode->id => [
                'Arch',
                'CentOS',
                'Debian',
                'Fedora',
                'Gentoo',
                'openSUSE',
                'Slackware',
                'Ubuntu',
                'Windows Server'                
            ],
            $aws->id => [
                'Amazon Linux',
                'CentOS',
                'Debian',
                'Fedora',
                'Gentoo',
                'openSUSE',
                'Red Hat Enterprise Linux',
                'SUSE Linux Enterprise Server',
                'Ubuntu',
            ],
            $digital_ocean->id => [
                'Ubuntu',
                'FreeBSD',
                'Fedora',
                'Debian',
                'CoreOS',
                'CentOS',
            ],
            $vultr->id => [
                'CentOS',           
                'Ubuntu',
                'Debian',
                'FreeBSD',
                'CoreOS',
                'Windows Server'
            ],
            $lightsail->id => [
                'Amazon Linux',           
                'Ubuntu',
            ],

        ];

        foreach($companies_operating_systems as $company_id => $operating_system_names) {
            $company = Company::find($company_id);

            foreach($operating_system_names as $os_name) {
                $os = OperatingSystem::where('name', $os_name)->first();

                if($os) {
                    $company->operatingSystems()->attach($os);
                }
            }
        }
    }
}

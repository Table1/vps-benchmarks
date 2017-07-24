<?php

use App\Plan;
use App\Company;
use App\Vps\LinodeVps;

use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linode = Company::where('name', 'Linode')->first();
        $linode_plans = collect((new LinodeVps)->avail->linodePlans());

        foreach($linode_plans as $linode_plan) {
            Plan::create([
                'company_id' => $linode->id,
                'name' => $linode_plan['LABEL'],
                'api_id' => $linode_plan['PLANID'],
                'cost_per_hour' => $linode_plan['HOURLY'],
                'monthly_cap' => $linode_plan['PRICE'],
                'cpu_cores' => $linode_plan['CORES'],
                'memory' => $linode_plan['RAM'],
                'storage' => $linode_plan['DISK'],
                'transfer' => $linode_plan['XFER'],
            ]);
        }

        $aws = Company::where('name', 'Amazon Web Services')->first();
        $digital_ocean = Company::where('name', 'Digital Ocean')->first();
        $vultr = Company::where('name', 'Vultr')->first();
        $lightsail = Company::where('name', 'Amazon Lightsail')->first();

        $company_plans = [
            $digital_ocean->id => [
                [
                    'name' => 'Standard 512MB',
                    'cost_per_hour' => 0.007,
                    'monthly_cap' => 5,
                    'cpu_cores' => 1,
                    'memory' => 0.5,
                    'storage' => 20,
                    'transfer' => 1,
                ],
                [
                    'name' => 'Standard 1GB',
                    'cost_per_hour' => 0.015,
                    'monthly_cap' => 10,
                    'cpu_cores' => 1,
                    'memory' => 1,
                    'storage' => 30,
                    'transfer' => 2,
                ],
                [
                    'name' => 'Standard 2GB',
                    'cost_per_hour' => 0.03,
                    'monthly_cap' => 20,
                    'cpu_cores' => 2,
                    'memory' => 2,
                    'storage' => 40,
                    'transfer' => 3,
                ],
                [
                    'name' => 'Standard 4GB',
                    'cost_per_hour' => 0.06,
                    'monthly_cap' => 40,
                    'cpu_cores' => 2,
                    'memory' => 4,
                    'storage' => 60,
                    'transfer' => 4,
                ],
                [
                    'name' => 'Standard 8GB',
                    'cost_per_hour' => 0.119,
                    'monthly_cap' => 80,
                    'cpu_cores' => 4,
                    'memory' => 8,
                    'storage' => 80,
                    'transfer' => 5,
                ],
                [
                    'name' => 'Standard 16GB',
                    'cost_per_hour' => 0.238,
                    'monthly_cap' => 160,
                    'cpu_cores' => 8,
                    'memory' => 16,
                    'storage' => 160,
                    'transfer' => 6,
                ],
                [
                    'name' => 'Standard 32GB',
                    'cost_per_hour' => 0.476,
                    'monthly_cap' => 320,
                    'cpu_cores' => 12,
                    'memory' => 32,
                    'storage' => 320,
                    'transfer' => 7,
                ],
                [
                    'name' => 'Standard 48GB',
                    'cost_per_hour' => 0.714,
                    'monthly_cap' => 480,
                    'cpu_cores' => 16,
                    'memory' => 48,
                    'storage' => 480,
                    'transfer' => 8,
                ],
                [
                    'name' => 'Standard 64GB',
                    'cost_per_hour' => 0.952,
                    'monthly_cap' => 640,
                    'cpu_cores' => 20,
                    'memory' => 64,
                    'storage' => 640,
                    'transfer' => 9,
                ],
                [
                    'name' => 'High Memory 16GB',
                    'cost_per_hour' => 0.18,
                    'monthly_cap' => 120,
                    'cpu_cores' => 2,
                    'memory' => 16,
                    'storage' => 30,
                    'transfer' => 6,
                ],
                [
                    'name' => 'High Memory 32GB',
                    'cost_per_hour' => 0.36,
                    'monthly_cap' => 240,
                    'cpu_cores' => 4,
                    'memory' => 32,
                    'storage' => 90,
                    'transfer' => 7,
                ],
                [
                    'name' => 'High Memory 64GB',
                    'cost_per_hour' => 0.71,
                    'monthly_cap' => 480,
                    'cpu_cores' => 8,
                    'memory' => 64,
                    'storage' => 200,
                    'transfer' => 8,
                ],
                [
                    'name' => 'High Memory 128GB',
                    'cost_per_hour' => 1.43,
                    'monthly_cap' => 960,
                    'cpu_cores' => 16,
                    'memory' => 128,
                    'storage' => 340,
                    'transfer' => 9,
                ],
                [
                    'name' => 'High Memory 224GB',
                    'cost_per_hour' => 2.5,
                    'monthly_cap' => 1680,
                    'cpu_cores' => 32,
                    'memory' => 224,
                    'storage' => 500,
                    'transfer' => 10,
                ],
            ],
            $aws->id => [
                [
                    'name' => 'T2 Nano',
                    'cost_per_hour' => 0.006,
                    'monthly_cap' => 4.745,
                    'cpu_cores' => 1,
                    'memory' => 0.5,
                ],
                [
                    'name' => 'T2 Micro',
                    'cost_per_hour' => 0.013,
                    'monthly_cap' => 9.49,
                    'cpu_cores' => 1,
                    'memory' => 1,
                ],
                [
                    'name' => 'T2 Small',
                    'cost_per_hour' => 0.026,
                    'monthly_cap' => 18.98,
                    'cpu_cores' => 1,
                    'memory' => 2,
                ],
                [
                    'name' => 'T2 Medium',
                    'cost_per_hour' => 0.052,
                    'monthly_cap' => 37.96,
                    'cpu_cores' => 2,
                    'memory' => 4,
                ],
                [
                    'name' => 'T2 Large',
                    'cost_per_hour' => 0.104,
                    'monthly_cap' => 75.92,
                    'cpu_cores' => 2,
                    'memory' => 8,
                ],
                [
                    'name' => 'T2 Extra Large',
                    'cost_per_hour' => 0.188,
                    'monthly_cap' => 137.24,
                    'cpu_cores' => 4,
                    'memory' => 16,
                ],
                [
                    'name' => 'T2 Double Extra Large',
                    'cost_per_hour' => 0.376,
                    'monthly_cap' => 274.48,
                    'cpu_cores' => 8,
                    'memory' => 32,
                ],
                [
                    'name' => 'C4 High-CPU Large',
                    'cost_per_hour' => 0.105,
                    'monthly_cap' => 76.65,
                    'cpu_cores' => 2,
                    'memory' => 3.75,
                    'network_in' => 500,
                    'network_out' => 500,
                ],
                [
                    'name' => 'C4 High-CPU Extra Large',
                    'cost_per_hour' => 0.209,
                    'monthly_cap' => 152.57,
                    'cpu_cores' => 4,
                    'memory' => 7.5,
                    'network_in' => 750,
                    'network_out' => 750,
                ],
                [
                    'name' => 'C4 High-CPU Double Extra Large',
                    'cost_per_hour' => 0.419,
                    'monthly_cap' => 305.87,
                    'cpu_cores' => 8,
                    'memory' => 15,
                    'network_in' => 1000,
                    'network_out' => 1000,
                ],
                [
                    'name' => 'C4 High-CPU Quadruple Extra Large',
                    'cost_per_hour' => 0.838,
                    'monthly_cap' => 611.74,
                    'cpu_cores' => 16,
                    'memory' => 30,
                    'network_in' => 2000,
                    'network_out' => 2000,
                ],
                [
                    'name' => 'C4 High-CPU Eight Extra Large',
                    'cost_per_hour' => 1.675,
                    'monthly_cap' => 1222.75,
                    'cpu_cores' => 36,
                    'memory' => 60,
                    'network_in' => 4000,
                    'network_out' => 4000,
                ],
                [
                    'name' => 'M4 Large',
                    'cost_per_hour' => 0.12,
                    'monthly_cap' => 87.6,
                    'cpu_cores' => 2,
                    'memory' => 8,
                    'network_in' => 450,
                    'network_out' => 450,
                ],
                [
                    'name' => 'M4 Extra Large',
                    'cost_per_hour' => 0.239,
                    'monthly_cap' => 174.47,
                    'cpu_cores' => 4,
                    'memory' => 16,
                    'network_in' => 750,
                    'network_out' => 750,
                ],
                [
                    'name' => 'M4 Double Extra Large',
                    'cost_per_hour' => 0.479,
                    'monthly_cap' => 349.67,
                    'cpu_cores' => 8,
                    'memory' => 32,
                    'network_in' => 1000,
                    'network_out' => 1000,
                ],
                [
                    'name' => 'M4 Quadruple Extra Large',
                    'cost_per_hour' => 0.958,
                    'monthly_cap' => 699.34,
                    'cpu_cores' => 16,
                    'memory' => 64,
                    'network_in' => 2000,
                    'network_out' => 2000,
                ],
                [
                    'name' => 'M4 Deca Extra Large',
                    'cost_per_hour' => 2.394,
                    'monthly_cap' => 1747.62,
                    'cpu_cores' => 40,
                    'memory' => 160,
                    'network_in' => 4000,
                    'network_out' => 4000,
                ],
                [
                    'name' => 'M4 Sixteen Extra Large',
                    'cost_per_hour' => 3.83,
                    'monthly_cap' => 2795.90,
                    'cpu_cores' => 64,
                    'memory' => 256,
                    'network_in' => 10000,
                    'network_out' => 10000,
                ],
                [
                    'name' => 'R4 Large',
                    'cost_per_hour' => 0.133,
                    'monthly_cap' => 97.09,
                    'cpu_cores' => 2,
                    'memory' => 15.25,
                    'network_in' => 10000,
                    'network_out' => 10000,
                ],
                [
                    'name' => 'R4 Extra Large',
                    'cost_per_hour' => 0.266,
                    'monthly_cap' => 194.18,
                    'cpu_cores' => 4,
                    'memory' => 30.5,
                    'network_in' => 10000,
                    'network_out' => 10000,
                ],
                [
                    'name' => 'R4 Double Extra Large',
                    'cost_per_hour' => 0.532,
                    'monthly_cap' => 388.36,
                    'cpu_cores' => 8,
                    'memory' => 61,
                    'network_in' => 10000,
                    'network_out' => 10000,
                ],
                [
                    'name' => 'R4 Quadruple Extra Large',
                    'cost_per_hour' => 1.064,
                    'monthly_cap' => 776.72,
                    'cpu_cores' => 16,
                    'memory' => 122,
                    'network_in' => 10000,
                    'network_out' => 10000,
                ],
                [
                    'name' => 'R4 Eight Extra Large',
                    'cost_per_hour' => 2.128,
                    'monthly_cap' => 1553.44,
                    'cpu_cores' => 32,
                    'memory' => 244,
                    'network_in' => 10000,
                    'network_out' => 10000,
                ],
                [
                    'name' => 'R4 Sixteen Extra Large',
                    'cost_per_hour' => 4.256,
                    'monthly_cap' => 3106.88,
                    'cpu_cores' => 64,
                    'memory' => 488,
                    'network_in' => 20000,
                    'network_out' => 20000,
                ],
            ],
            $lightsail->id => [
                [
                    'name' => '512MB',
                    'cost_per_hour' => 0.007,
                    'monthly_cap' => 5,
                    'cpu_cores' => 1,
                    'memory' => 0.5,
                    'storage' => 20,
                    'transfer' => 1,
                ],
                [
                    'name' => '1GB',
                    'cost_per_hour' => 0.015,
                    'monthly_cap' => 10,
                    'cpu_cores' => 1,
                    'memory' => 1,
                    'storage' => 30,
                    'transfer' => 2,
                ],
                [
                    'name' => '2GB',
                    'cost_per_hour' => 0.03,
                    'monthly_cap' => 20,
                    'cpu_cores' => 1,
                    'memory' => 2,
                    'storage' => 40,
                    'transfer' => 3,
                ],
                [
                    'name' => '4GB',
                    'cost_per_hour' => 0.06,
                    'monthly_cap' => 40,
                    'cpu_cores' => 2,
                    'memory' => 4,
                    'storage' => 60,
                    'transfer' => 4,
                ],
                [
                    'name' => '8GB',
                    'cost_per_hour' => 0.119,
                    'monthly_cap' => 80,
                    'cpu_cores' => 2,
                    'memory' => 8,
                    'storage' => 80,
                    'transfer' => 5,
                ],
            ],            
        ];

        foreach($company_plans as $company_id => $plans) {
            $company = Company::find($company_id);

            foreach($plans as $plan) {
                $plan['company_id'] = $company->id;
                Plan::create($plan);
            }
        }
    }
}

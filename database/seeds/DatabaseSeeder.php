<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(OperatingSystemSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(OperatingSystemCompanySeeder::class);
        $this->call(DataCenterSeeder::class);
        $this->call(PriceRangeSeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(PerformanceCategorySeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(PerformanceCategoryServiceSeeder::class);
        $this->call(TestSuiteSeeder::class);
        $this->call(TestSeeder::class);
        $this->call(PerformanceCategoryTestSeeder::class);
        $this->call(ServiceTestSeeder::class);
        $this->call(FrameworkSeeder::class);
    }
}

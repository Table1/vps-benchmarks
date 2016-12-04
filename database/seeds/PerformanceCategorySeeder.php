<?php

use App\PerformanceCategory;

use Illuminate\Database\Seeder;

class PerformanceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $performance_category_names  = [
            'Compute',
            'Memory',
            'Disk',
            'Network',
            'Private Network',
        ];

        foreach($performance_category_names as $performance_category_name) {
            PerformanceCategory::create([
                'name' => $performance_category_name
            ]);
        }
    }
}

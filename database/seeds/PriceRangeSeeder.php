<?php

use App\PriceRange;

use Illuminate\Database\Seeder;

class PriceRangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price_ranges = [
            [
                'name' => 'Budget',
                'min' => 0,
                'max' => 5
            ],
            [
                'name' => 'Low-range',
                'min' => 6,
                'max' => 20
            ],
            [
                'name' => 'Mid-range',
                'min' => 21,
                'max' => 80
            ],
            [
                'name' => 'High-range',
                'min' => 81,
                'max' => 160
            ],
            [
                'name' => 'Premium',
                'min' => 161,
                'max' => 100000
            ],
        ];

        foreach($price_ranges as $price_range) {
            PriceRange::create($price_range);
        }
    }
}

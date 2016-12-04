<?php

use App\Framework;

use Illuminate\Database\Seeder;

class FrameworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $frameworks = [
            [
                'name' => 'Laravel',
                'url' => 'https://laravel.com'
            ],
            [
                'name' => 'Symfony',
                'url' => 'https://symfony.com'
            ],
            [
                'name' => 'Django',
                'url' => 'https://www.djangoproject.com'
            ],
            [
                'name' => 'Ruby on Rails',
                'url' => 'https://rubyonrails.org'
            ],
        ];

        foreach($frameworks as $framework) {
            Framework::create($framework);
        }        
    }
}

<?php

use App\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Erik',
            'last_name' => 'Westlund',
            'password' => bcrypt('temp'),
            'email' => 'erik@table1.org'
        ]);
    }
}

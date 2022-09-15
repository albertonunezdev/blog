<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Alberto Núñez',
            'email' => 'albertonunezmaneiro@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        User::factory(9)->create();
    }
}

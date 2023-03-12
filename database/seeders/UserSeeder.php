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
            'name' => 'Marjan Stojanovski',
            'email' => 'stojanovskim@yahoo.com',
            'password' => bcrypt('temp12345'),
            'role_id' => rand(1,3),
            'country_id' => rand(1,233)
        ]);

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.mk',
            'password' => bcrypt('temp12345'),
            'role_id' => 1,
            'country_id' => rand(1,223)
        ]);
    }
}

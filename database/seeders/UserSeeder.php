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
            'address' => 'Ul.2 Br.54 s.Bujkovci',
            'password' => bcrypt('temp12345'),
            'role_id' => 1,
            'country_id' => 4
        ]);
    }
}

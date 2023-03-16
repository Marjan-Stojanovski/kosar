<?php

namespace Database\Seeders;

use App\Models\Volume;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VolumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Volume::create([
            'volume' => '1L'
        ]);
        Volume::create([
            'volume' => '0.75L'
        ]);
        Volume::create([
            'volume' => '0.5L'
        ]);
        Volume::create([
            'volume' => '0.33L'
        ]);
        Volume::create([
            'volume' => '0.25L'
        ]);
    }

}

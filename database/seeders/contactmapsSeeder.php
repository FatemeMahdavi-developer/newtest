<?php

namespace Database\Seeders;

use App\Models\contact_maps;
use App\Models\map;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class contactmapsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        contact_maps::create([
            'lgmap'=>'122323',
            'qgmap'=>'222222'
        ]);

    }
}

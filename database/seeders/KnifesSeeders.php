<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Knifes;

class KnifesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Knifes::create([
            'nom' => 'StatTrak™ Butterfly Knife  Doppler Factory New',
            'tipus' => 'Mariposa',
            'float' => 0.1,
            'lock' => '1',
            'preu' => 2000.00,
        ]);

        Knifes::create([
            'nom' => 'Butterfly Knife Night Well-Worn',
            'tipus' => 'Mariposa',
            'float' => 0.38,
            'lock' => '5',
            'preu' => 2700.00,
        ]);
        Knifes::create([
            'nom' => 'StatTrak™ Shadow Daggers  Fade (Factory New)',
            'tipus' => 'Daga',
            'float' => 0.04,
            'lock' => '0',
            'preu' => 263.00,
        ]);
        Knifes::create([
            'nom' => 'StatTrak™ Huntsman Knife Doppler Factory New',
            'tipus' => 'Ganyivet',
            'float' => 0.03,
            'lock' => '5',
            'preu' => 479.00,
        ]);
        Knifes::create([
            'nom' => 'Bowie Knife | Doppler (Minimal Wear)',
            'tipus' => 'Caçador',
            'float' => 0.07,
            'lock' => '5',
            'preu' => 700.00,
        ]);
    }
}


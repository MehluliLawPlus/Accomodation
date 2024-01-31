<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'Standard Room',
            'Superior Room',
            'Mbizo Rooms.',
        ];

        $information = [
            'Sharing for two people on campus.',
            'Room for one on campus.',
            'Mbizo room from various landlords.',
        ];

        for ($i = 0; $i < count($name); $i++) {
            Type::create([
                'name' => $name[$i],
                'information' => $information[$i]
            ]);
        }
    }
}

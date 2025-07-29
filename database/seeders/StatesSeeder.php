<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ["name" => "Bengo"],
            ["name" => "Benguela"],
            ["name" => "Bié"],
            ["name" => "Cabinda"],
            ["name" => "Cuando Cubango"],
            ["name" => "Cuanza Norte"],
            ["name" => "Cuanza Sul"],
            ["name" => "Cunene"],
            ["name" => "Huambo"],
            ["name" => "Huíla"],
            ["name" => "Luanda"],
            ["name" => "Lunda Norte"],
            ["name" => "Lunda Sul"],
            ["name" => "Malanje"],
            ["name" => "Moxico"],
            ["name" => "Namibe"],
            ["name" => "Uíge"],
            ["name" => "Zaire"]
        ];
        State::insert($states);
    }
}

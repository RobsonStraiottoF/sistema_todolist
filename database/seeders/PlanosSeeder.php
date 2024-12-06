<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('planos')->insert([
            [
                "titulo" => "Gratuito",
                "descricao" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nemo illo architecto i",
                "valor" => 0.00
            ],
            [
                "titulo" => "Premium",
                "descricao" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nemo illo architecto i",
                "valor" => 29.00
            ],
            [
                "titulo" => "Gold",
                "descricao" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nemo illo archi",
                "valor" => 50.00
            ],
        ]);
        

    }
}

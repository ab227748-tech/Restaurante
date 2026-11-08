<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categoria as CategoriaModel;

class Categoria extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoriaModel::create([
            'nombrecategoria' => 'Hamburguesas',
            'estado' => true,
        ]);
    }
}

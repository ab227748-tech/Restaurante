<?php

namespace Database\Seeders;

use App\Models\producto as ProductoModel;
use Illuminate\Database\Seeder;

class Producto extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductoModel::create([
            'nombre' => 'Hamburguesa BBQ',
            'descripcion' => 'Hamburguesa con salsa BBQ y vegetales frescos.',
            'precio' => 80.00,
            'imagen' => 'hamburguesa_bbq.png',
            'categoria' => 'Hamburguesas',
            'activo' => true,
            'vistaprincipal' => 'si',
        ]);
    }
}

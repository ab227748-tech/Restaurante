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
            'imagen' => 'hamburguesabbq.png',
            'categoriaid' => 1,
            'activo' => true,
            'vistaprincipal' => 'si',
        ]);
        ProductoModel::create([
            'nombre' => 'Hamburguesa Clásica',
            'descripcion' => 'Hamburguesa con carne de res y vegetales frescos.',
            'precio' => 50.00,
            'imagen' => 'hamburguesaclasica.png',
            'categoriaid' => 1,
            'activo' => true,
            'vistaprincipal' => 'no',
        ]);
    }
}

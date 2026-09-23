<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $patinetas = Category::create([
            'name' => 'Patinetas eléctricas',
            'description' => 'Vehículos eléctricos ágiles para recorridos urbanos de corta distancia.',
        ]);

        $bicicletas = Category::create([
            'name' => 'Bicicletas eléctricas',
            'description' => 'Vehículos eléctricos cómodos para recorridos urbanos de media distancia.',
        ]);

        Product::create([
            'name' => 'ECOVOLT Urban',
            'description' => 'Patineta eléctrica diseñada para recorridos urbanos ágiles y de corta distancia.',
            'price' => 8500,
            'category_id' => $patinetas->id,
        ]);

        Product::create([
            'name' => 'ECOVOLT Ride',
            'description' => 'Patineta eléctrica orientada a una movilidad práctica y conectada dentro de la ciudad.',
            'price' => 9500,
            'category_id' => $patinetas->id,
        ]);

        Product::create([
            'name' => 'ECOVOLT City',
            'description' => 'Bicicleta eléctrica para desplazamientos urbanos cómodos y recorridos de media distancia.',
            'price' => 12000,
            'category_id' => $bicicletas->id,
        ]);
    }
}
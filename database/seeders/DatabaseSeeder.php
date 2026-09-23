<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */

        $category1 = new Category();
        $category1->name = "Patinetas eléctricas";
        $category1->description = "Vehículos eléctricos ágiles para recorridos urbanos de corta distancia.";
        $category1->save();

        $category2 = new Category();
        $category2->name = "Bicicletas eléctricas";
        $category2->description = "Vehículos eléctricos cómodos para recorridos urbanos de media distancia.";
        $category2->save();

        Category::factory(10)->create();
    }
}
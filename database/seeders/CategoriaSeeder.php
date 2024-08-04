<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nome' => 'Café',
            'icono' => 'icono_cafe.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('categorias')->insert([
            'nome' => 'Hamburguers',
            'icono' => 'icono_hamburguer.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('categorias')->insert([
            'nome' => 'Pizzas',
            'icono' => 'icono_pizza.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('categorias')->insert([
            'nome' => 'Assados',
            'icono' => 'icono_biscoito.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('categorias')->insert([
            'nome' => 'Pasteis',
            'icono' => 'icono_pastel.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('categorias')->insert([
            'nome' => 'Bolos',
            'icono' => 'icono_bolo.svg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

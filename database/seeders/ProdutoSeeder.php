<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            'nome' => 'Café Expresso',
            'descricao' => 'Um café expresso forte e aromático.',
            'preco' => 4.50,
            'imagen' => 'cafe_11.jpg',
            'disponivel' => 1,
            'categoria_id' => 1
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Café Latte',
            'descricao' => 'Café expresso com leite vaporizado e espuma.',
            'preco' => 5,
            'imagen' => 'cafe_06.jpg',
            'disponivel' => 1,
            'categoria_id' => 1
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Café Cappuccino',
            'descricao' => 'Café expresso com leite vaporizado e espuma densa.',
            'preco' => 9,
            'imagen' => 'cafe_02.jpg',
            'disponivel' => 1,
            'categoria_id' => 1
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Cheeseburger Clássico',
            'descricao' => 'Hambúrguer de carne bovina com queijo cheddar, alface, tomate e maionese.',
            'preco' => 10,
            'imagen' => 'hamburguer_01.jpg',
            'disponivel' => 1,
            'categoria_id' => 2
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Hamburguer BBQ',
            'descricao' => 'Hambúrguer de carne bovina com queijo, bacon, cebola caramelizada e molho barbecue.',
            'preco' => 23,
            'imagen' => 'hamburguer_03.jpg',
            'disponivel' => 1,
            'categoria_id' => 2
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Vaggie Burger',
            'descricao' => 'Hambúrguer vegetariano com cogumelos, espinafre e queijo feta, servido com molho de iogurte.',
            'preco' => 89.9,
            'imagen' => 'hamburguer_05.jpg',
            'disponivel' => 1,
            'categoria_id' => 2
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Pizza Margherita',
            'descricao' => 'Pizza com molho de tomate, queijo mozzarella e manjericão fresco.',
            'preco' => 109.9,
            'imagen' => 'pizzas_05.jpg',
            'disponivel' => 1,
            'categoria_id' => 3
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Pizza Pepperoni',
            'descricao' => 'Pizza com molho de tomate, queijo mozzarella e fatias de pepperoni.',
            'preco' => 79.9,
            'imagen' => 'pizzas_01.jpg',
            'disponivel' => 1,
            'categoria_id' => 3
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Pizza Vegetariana',
            'descricao' => 'Pizza com molho de tomate, queijo mozzarella e uma seleção de vegetais frescos.',
            'preco' => 99.9,
            'imagen' => 'pizzas_09.jpg',
            'disponivel' => 1,
            'categoria_id' => 3
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Pizza Mixta',
            'descricao' => 'Pizza com molho de tomate, queijo mozzarella e manjericão fresco,  queijo mozzarella e uma seleção de vegetais frescos.',
            'preco' => 139.9,
            'imagen' => 'pizzas_07.jpg',
            'disponivel' => 1,
            'categoria_id' => 3
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Croissant de Manteiga',
            'descricao' => 'Croissant fresco e amanteigado, com uma crosta dourada e macia por dentro.',
            'preco' => 9.9,
            'imagen' => 'assado.jpg',
            'disponivel' => 1,
            'categoria_id' => 4
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Pão de Queijo',
            'descricao' => 'Pão de queijo brasileiro, feito com polvilho e queijo minas, crocante por fora e macio por dentro.',
            'preco' => 2.5,
            'imagen' => 'assado_02.jpg',
            'disponivel' => 1,
            'categoria_id' => 4
        ]);


        DB::table('produtos')->insert([
            'nome' => 'Bolo de Chocolate',
            'descricao' => 'Bolo de chocolate úmido com cobertura de ganache de chocolate.',
            'preco' => 29.5,
            'imagen' => 'bolo.jpg',
            'disponivel' => 1,
            'categoria_id' => 4
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Pastel de Carne',
            'descricao' => 'Pastel recheado com carne moída temperada, cebola e azeitonas.',
            'preco' => 9.5,
            'imagen' => 'pastel_01.jpg',
            'disponivel' => 1,
            'categoria_id' => 5
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Pastel de Queijo',
            'descricao' => 'Pastel recheado com queijo muçarela derretido e temperos.',
            'preco' => 12.5,
            'imagen' => 'pastel_03.jpg',
            'disponivel' => 1,
            'categoria_id' => 5
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Pastel de Frango',
            'descricao' => 'Pastel recheado com frango desfiado, milho e azeitonas.',
            'preco' => 10,
            'imagen' => 'pastel_02.jpg',
            'disponivel' => 1,
            'categoria_id' => 5
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Mojito',
            'descricao' => 'Coquetel refrescante com rum, hortelã, limão e água com gás.',
            'preco' => 8,
            'imagen' => 'bolo_01.jpg',
            'disponivel' => 1,
            'categoria_id' => 6
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Mojito',
            'descricao' => 'Coquetel refrescante com rum, hortelã, limão e água com gás.',
            'preco' => 8,
            'imagen' => 'bolo_02.jpg',
            'disponivel' => 1,
            'categoria_id' => 6
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Caipirinha',
            'descricao' => 'Coquetel brasileiro feito com cachaça, limão e açúcar.',
            'preco' => 9,
            'imagen' => 'bolo_04.jpg',
            'disponivel' => 1,
            'categoria_id' => 6
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Bloody Mary',
            'descricao' => 'Coquetel com vodka, suco de tomate e especiarias.',
            'preco' => 7.9,
            'imagen' => 'bolo_07.jpg',
            'disponivel' => 1,
            'categoria_id' => 6
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Mixto Jat',
            'descricao' => 'Coquetel refrescante com rum, hortelã, limão e água com gás Coquetel com vodka, suco de tomate e especiarias.',
            'preco' => 18,
            'imagen' => 'bolo_06.jpg',
            'disponivel' => 1,
            'categoria_id' => 6
        ]);
        
    }
}

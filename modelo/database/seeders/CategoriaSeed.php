<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::insert(['nome' => 'Alimentação', 'descricao' => 'produtos de Alimentação']);
        Categoria::insert(['nome' => 'Limpeza', 'descricao' => 'produtos de Limpeza']);
        Categoria::insert(['nome' => 'Panificação', 'descricao' => 'produtos de Panificação']);
    }
}

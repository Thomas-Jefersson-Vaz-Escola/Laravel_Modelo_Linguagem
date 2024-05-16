<?php

namespace Database\Seeders;

use App\Models\cliente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        cliente::insert([
            'nome_cliente' => Str::random(10),
            'cpf_cliente' => Str::random(11),
        ]);
    }
}

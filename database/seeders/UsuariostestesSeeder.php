<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariostestesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //seed para criação de usuários no banco de dados
    public function run(): void
    {
        Usuario::factory(5)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;


use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //criando um usuário no banco
    public function run(): void
    {
        User::create([
            'name' => 'Deivid2',
            'email' => 'deivid@testi',
            'cpf' => '60151912014',
            'data_nascimento' => '2000-10-04',
            'telefone' => '51984840958',
            'password' => ('teste1234'),
        ]);
    }
}

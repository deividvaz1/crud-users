<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    //Testando usuário teste no banco
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'cpf' => $this->faker->unique()->numerify('###########'),
            'data_nascimento' => $this->faker->date('Y-m-d', '2005-01-01'),
            'telefone' => $this->faker->phoneNumber(),
            'email_verified_at' => now(),
            'password' => ('senha123'),
        ];
    }
}

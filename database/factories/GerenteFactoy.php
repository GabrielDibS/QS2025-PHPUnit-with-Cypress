<?php

namespace Database\Factories;

use App\Models\Gerente;
use Illuminate\Database\Eloquent\Factories\Factory;

class GerenteFactory extends Factory
{
    protected $model = Empresa::class;

    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
<?php

namespace Database\Factories;

use App\Models\ItemCarrinho;
use App\Models\Carrinho;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemCarrinhoFactory extends Factory
{
    protected $model = ItemCarrinho::class;

    public function definition()
    {
        return [
            'carrinho_id' => Carrinho::factory(),
            'produto_id' => Produto::factory(),
            'quantidade' => $this->faker->numberBetween(1, 5),
        ];
    }
}
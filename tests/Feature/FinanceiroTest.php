<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Financeiro;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FinanceiroTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function consegue_criar_registro_financeiro()
    {
        $response = $this->post('/financeiro', [
            'descricao' => 'Receita',
            'valor' => 1000.00,
        ]);

        $response->assertRedirect('/financeiro');
        $this->assertDatabaseHas('financeiros', ['descricao' => 'Receita']);
    }
}
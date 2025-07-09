<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Gerente;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GerenteTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function consegue_criar_um_gerente()
    {
        $response = $this->post('/gerentes/salvar', [
            'nome' => 'João da Silva',
            'email' => 'joao@empresa.com',
        ]);

        $response->assertRedirect('/gerentes');
        $this->assertDatabaseHas('gerentes', ['email' => 'joao@empresa.com']);
    }
}
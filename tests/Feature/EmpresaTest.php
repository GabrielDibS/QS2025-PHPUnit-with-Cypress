<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmpresaTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function consegue_criar_uma_empresa()
    {
        $response = $this->post('/empresas/salvar', [
            'nome' => 'Empresa Teste',
            'cnpj' => '12.345.678/0001-99',
            'email_contato' => 'contato@empresa.com',
        ]);

        $response->assertRedirect(route('empresas.listar'));

        $this->assertDatabaseHas('empresas', [
            'nome' => 'Empresa Teste',
            'cnpj' => '12.345.678/0001-99',
        ]);

    }
    /** @test */
    public function consegue_listar_empresas()
    {
        Empresa::factory()->create(['nome' => 'Empresa A']);
        Empresa::factory()->create(['nome' => 'Empresa B']);

        $response = $this->get('/empresas');

        $response->assertStatus(200);
        $response->assertSee('Empresa A');
        $response->assertSee('Empresa B');
    }
}
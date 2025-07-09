<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Produto;

class ProdutoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function consegue_listar_produtos()
    {
        Produto::factory()->create(['nome' => 'Produto Exemplo']);
        $response = $this->get('/produtos');
        $response->assertStatus(200);
        $response->assertSee('Produto Exemplo');
    }

    /** @test */
    public function consegue_criar_um_produto()
    {
        $response = $this->post('/produtos', [
            'nome' => 'Caneta Azul',
            'preco' => '2.50',
            'descricao' => 'Produto Musical',
        ]);
        $response->assertRedirect('/produtos');
        $this->assertDatabaseHas('produtos', [
            'nome' => 'Caneta Azul',
        ]);
    }

    /** @test */
    public function consegue_atualizar_um_produto()
    {
        $produto = Produto::factory()->create([
            'nome' => 'Lápis Azul',
            'preco' => 1.50,
        ]);
        $response = $this->put("/produtos/{$produto->id}", [
            'nome' => 'Lápis Vermelho',
            'preco' => 3.50,
        ]);
        $response->assertRedirect('/produtos');
        $this->assertDatabaseHas('produtos', ['nome' => 'Lápis Vermelho']);
    }

    /** @test */
    public function consegue_deletar_um_produto()
    {
        $produto = Produto::factory()->create();
        $response = $this->delete("/produtos/{$produto->id}");
        $response->assertRedirect('/produtos');
        $this->assertDatabaseMissing('produtos', ['id' => $produto->id]);
    }
}


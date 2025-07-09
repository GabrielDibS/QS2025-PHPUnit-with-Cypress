describe('CRUD de Produto', () => {
  const produtoOriginal = {
    nome: 'Caneta Teste',
    preco: '9.99',
    descricao: 'Azul Caneta'
  };

  const produtoEditado = {
    nome: 'Caneta Editada',
    preco: '6.90',
    descricao: 'Caneta Azul'
  };

  it('criar, editar, listar e deletar', () => {
    cy.visit('/produtos/create');
    cy.get('input[name=nome]').type(produtoOriginal.nome);
    cy.get('input[name=preco]').type(produtoOriginal.preco);
    cy.get('textarea[name=descricao]').type(produtoOriginal.descricao);
    cy.get('form').submit();

    cy.url().should('include', '/produtos');
    cy.contains(produtoOriginal.nome);
    cy.contains(new RegExp(`R\\$\\s*${produtoOriginal.preco}`));
    cy.contains('Ver').first().click();
    cy.contains(new RegExp(`\\s*${produtoOriginal.descricao}`));

    cy.contains('Voltar').click();
    cy.contains('Editar').click();

    cy.get('input[name=nome]').clear().type(produtoEditado.nome);
    cy.get('input[name=preco]').clear().type(produtoEditado.preco);
    cy.get('textarea[name=descricao]').clear().type(produtoEditado.descricao);
    cy.get('form').submit();

    cy.contains(produtoEditado.nome);
    cy.contains(new RegExp(`R\\$\\s*${produtoEditado.preco}`));

    cy.contains('Excluir').click();

    cy.contains(produtoEditado.nome).should('not.exist');
  });
});
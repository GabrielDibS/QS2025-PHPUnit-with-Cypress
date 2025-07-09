<h2>Cadastrar Empresa</h2>

<form method="POST" action="{{ route('empresas.salvar') }}">
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome"><br>

    <label>CNPJ:</label>
    <input type="text" name="cnpj"><br>

    <label>Email de Contato:</label>
    <input type="email" name="email_contato"><br>

    <button type="submit">Salvar</button>
</form>

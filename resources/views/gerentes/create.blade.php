<h2>Cadastrar Gerente</h2>

<form method="POST" action="{{ route('gerentes.salvar') }}">
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome"><br>

    <label>Email:</label>
    <input type="email" name="email"><br>

    <label>Empresas:</label><br>
    @foreach ($empresas as $empresa)
        <input type="checkbox" name="empresas[]" value="{{ $empresa->id }}"> {{ $empresa->nome }}<br>
    @endforeach

    <button type="submit">Salvar</button>
</form>

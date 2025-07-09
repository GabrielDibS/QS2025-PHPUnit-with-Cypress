<h2>Gerentes Cadastrados</h2>

<ul>
@foreach ($gerentes as $gerente)
    <li>
        {{ $gerente->nome }} ({{ $gerente->email }})
        <br>
        Empresas: 
        @foreach ($gerente->empresas as $empresa)
            {{ $empresa->nome }},
        @endforeach
        <br>
        <a href="{{ route('gerentes.editar', $gerente->id) }}">Editar</a> |
        <form action="{{ route('gerentes.deletar', $gerente->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </li>
@endforeach
</ul>

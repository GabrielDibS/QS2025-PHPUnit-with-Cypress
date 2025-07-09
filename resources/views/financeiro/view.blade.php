<h1>Relatório Geral</h1>

<h2>Coisas de Empresa</h2>
<ul>
@foreach ($a1 as $q)
    <li>{{ $q->nome ?? 'sem nome' }} - {{ $q->cnpj ?? 'sem cnpj' }}</li>
@endforeach
</ul>

<h2>Produtos Listados</h2>
@foreach ($a2 as $w)
    <div>
        <b>Produto:</b> {{ $w->nome ?? 'x' }} |
        <b>Preço:</b> R$ {{ $w->preco ?? '??' }}
    </div>
@endforeach

<h2>Usuários</h2>
<table border="1">
@foreach ($a3 as $u)
    <tr>
        <td>{{ $u->id }}</td>
        <td>{{ $u->name }}</td>
        <td>{{ $u->email }}</td>
    </tr>
@endforeach
</table>

<h2>Gerentes ou Chefias</h2>
@foreach ($a4 as $g)
    <p>Nome: {{ $g->nome }} | Email: {{ $g->email }}</p>
    <i>Empresas: 
    @foreach ($g->empresas as $e)
        {{ $e->nome }},
    @endforeach
    </i>
@endforeach

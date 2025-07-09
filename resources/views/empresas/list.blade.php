@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Lista de Empresas</h2>
    <a href="{{ route('empresas.criar') }}" class="btn btn-success mb-3">Nova Empresa</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Email de Contato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empresas as $empresa)
                <tr>
                    <td>{{ $empresa->nome }}</td>
                    <td>{{ $empresa->cnpj }}</td>
                    <td>{{ $empresa->email_contato }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
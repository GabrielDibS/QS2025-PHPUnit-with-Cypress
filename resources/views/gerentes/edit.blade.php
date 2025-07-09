@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Editar Gerente</h2>
    <form action="{{ route('gerentes.atualizar', $gerente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ $gerente->nome }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" value="{{ $gerente->email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="empresas" class="form-label">Empresas</label>
            <select name="empresas[]" id="empresas" class="form-select" multiple>
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id }}"
                        @if ($gerente->empresas->contains($empresa->id)) selected @endif>
                        {{ $empresa->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
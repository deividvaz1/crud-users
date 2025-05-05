@extends('site.layout')
@section('title', 'Detalhes')
@section('conteudo')

<div class="row container">
    <div class="col s12 m8 offset-m2">

        <!-- Formulário de edição -->
        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="card">
            @csrf
            @method('PUT')

            <div class="card-content">
                <span class="card-title">Editar Usuário</span>

                <div class="input-field">
                    <input type="text" id="name" name="name" value="{{ $usuario->name }}" required>
                    <label for="name" class="active">Nome</label>
                </div>

                <div class="input-field">
                    <input type="email" id="email" name="email" value="{{ $usuario->email }}" required>
                    <label for="email" class="active">Email</label>
                </div>

                <div class="input-field">
                    <input type="text" id="cpf" name="cpf" value="{{ $usuario->cpf }}" required>
                    <label for="cpf" class="active">CPF</label>
                </div>

                <div class="input-field">
                    <input type="date" id="data_nascimento" name="data_nascimento" value="{{ $usuario->data_nascimento }}" required>
                    <label for="data_nascimento" class="active">Data de Nascimento</label>
                </div>

                <div class="input-field">
                    <input type="text" id="telefone" name="telefone" value="{{ $usuario->telefone }}">
                    <label for="telefone" class="active">Telefone</label>
                </div>
            </div>

            <div class="card-action">
                <button type="submit" class="btn green">Salvar</button>
            </div>
        </form>

        <!-- Formulário de exclusão separado -->
        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn red">Excluir</button>
        </form>

    </div>
</div>

@endsection

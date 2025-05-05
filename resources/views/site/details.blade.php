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

                <div>
                    <label for="password">Nova Senha (deixe em branco para não alterar)</label>
                    <input type="password" name="password" id="password" class="input" />
                </div>

            </div>

            <div class="card-action">
                <button type="submit" class="btn green">Salvar</button>
            </div>
        </form>

    </div>
</div>

<!-- javascript para cuidar da formatação do formulario-->
<script src="https://unpkg.com/vanilla-masker/build/vanilla-masker.min.js"></script>
<script>
    VMasker(document.getElementById("cpf")).maskPattern("999.999.999-99");
    VMasker(document.getElementById("telefone")).maskPattern("(99) 99999-9999");
</script>

@endsection

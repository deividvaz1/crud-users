@extends('site.layout')
@section('title', 'Página inicial')
@section('conteudo')

<!-- grid de colunas -->
<div class="row" style="max-width: 80%; background: #f5f5f5; border: 1px solid transparent; border-radius: 15px;">

    <!-- formulario de cadastro -->
    <div class="col s12 m4 z-depth-2" style="background: #fff; border: 1px solid #9e9e9e; border-radius: 15px;">
        @component('components.formulario')
        @endcomponent
    </div>
    <!-- coluna listando os usuários cadastrados no banco -->
    <div class="col s12 m8">
        <ul class="collection with-header z-depth-2" style="border: 1px solid #9e9e9e; border-radius: 15px;">
            <li class="collection-header">
                <h5>Dashboard Usuários</h5>
            </li>
            <li class="collection-item grey lighten-4">
                <div class="row" style="margin-bottom: 0;">
                    <div class="col s2"><strong>Nome</strong></div>
                    <div class="col s3"><strong>Email</strong></div>
                    <div class="col s2"><strong>CPF</strong></div>
                    <div class="col s2"><strong>Nascimento</strong></div>
                    <div class="col s2"><strong>Telefone</strong></div>
                    <div class="col s1 right-align"><strong>Ações</strong></div>
                </div>
            </li>

            @foreach ($usuarios as $usuario)
                <li class="collection-item">
                    <div class="row" style="margin-bottom: 0;">
                        <div class="col s2">{{ $usuario->name }}</div>
                        <div class="col s3">{{ $usuario->email }}</div>
                        <div class="col s2">{{ $usuario->cpf }}</div>
                        <div class="col s2">{{ \Carbon\Carbon::parse($usuario->data_nascimento)->format('d/m/Y') }}</div>
                        <div class="col s2">{{ $usuario->telefone }}</div>
                        <div class="col s1 right-align">
                            <a href="{{ route('site.details', $usuario->id) }}" class="secondary-content" title="Editar">
                                <i class="material-icons">edit</i>
                            </a>
                            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none; background: none; padding: 0;" title="Excluir">
                                    <i class="material-icons red-text text-darken-2">delete</i>
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection

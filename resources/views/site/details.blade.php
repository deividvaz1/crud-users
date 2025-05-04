@extends('site.layout')
@section('title', 'Detalhes')
@section('conteudo')

<div class="row container">
    <div class="col s12 m6">
        {{$usuario->name}}
        {{$usuario->email}}
        {{$usuario->cpf}}
        {{$usuario->data_nascimento}}
        {{$usuario->telefone}}
    </div>
</div>

@endsection

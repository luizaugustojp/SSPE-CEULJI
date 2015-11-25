@extends('layouts.master')

@section('content')
    <h1>Novo contato</h1>

    <a href="/contato" class="btn btn-sm btn-warning">
        <span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar
    </a>
    <hr>

    <form method="POST" accept-charset="UTF-8" action="/contato">
        <div class="form-group">
            <label for="Nome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o nome">
        </div>
        <div class="form-group">
            <label for="Telefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" placeholder="Ex.: 69 3421-0001">
        </div>

        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Digite um email válido">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        {{ csrf_field() }}
    </form>
@endsection

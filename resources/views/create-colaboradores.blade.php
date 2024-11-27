@extends('layouts.app')

@section('styles')
    <style>
        .conteudo-form {
            margin: 10px;
            padding: 10px;
        }

        .conteudo-form input{
            margin-bottom: 10px;
            width: 50%;
        }
        .conteudo-form input[type='submit']{
            margin-top: 10px;
            width: 100px;
        }
    </style>
@endsection

@section('scripts')
@endsection

@section('content')
    <form action="{{ route('colaborador.store') }}" method="post">
        @csrf
        <div class="conteudo-form">
            <p>
                @if(session('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}

                </div>

                @endif
            </p>
            <h1>Formulário de cadastro</h1>
            <label for="nome">Nome</label>
            <br>
            <input type="text" name="nome" id="nome">
            <br>
            <label for="telefone">Telefone</label>
            <br>
            <input type="text" name="telefone" id="telefone">
            <br>
            <label for="email">E-mail</label>
            <br>
            <input type="text" name="email" id="email">
            <br>
            <label for="cidade">Cidade</label>
            <br>
            <input type="text" name="cidade" id="cidade">
            <br>
            <label for="numero">Numero</label>
            <br>
            <input type="text" name="numero" id="numero">
            <br>
            <label for="estado">Estado</label>
            <br>
            <input type="text" name="estado" id="estado">
            <br>
            <label for="bairro">Bairro</label>
            <br>
            <input type="text" name="bairro" id="bairro">
            <br>
            <label for="cargo">Cargo</label>
            <br>
            <input type="text" name="cargo" id="cargo">
            <br>
            <input type="submit" value="Enviar">
        </div>
    </form>
@endsection

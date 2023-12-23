@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')

<div class="container">
    <h2>Preencha os dados do Contato</h2>

    <form action="/cadastro" method="POST" class="formCad">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Nome Completo:<span class="text-danger">*</span></label>
            <input type="text" name="name"   id="name" class="form-control">
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    {{ $errors->first('name') }}
                </div>
            @endif

        </div>

        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Data de Nascimento:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
        </div>

        <div class="mb-3">
            <label for="telephone"  class="form-label">Telefone:<span class="text-danger">*</span></label>
            <input type="number" name="telephone"  id="telephone" class="form-control">
            @if ($errors->has('telephone'))
                <div class="alert alert-danger">
                    {{ $errors->first('telephone') }}
                </div>
            @endif
           
        
           

        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>

        <div class="mb-3">
            <label for="compromisso" class="form-label">Compromisso:</label>
            <input type="text" name="compromisso" id="compromisso" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>



@endsection
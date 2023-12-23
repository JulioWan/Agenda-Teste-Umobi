@extends('layouts.main')

@section('title', 'editando' . $agenda->title)

@section('content')

<div class="edit">
    <div class="text-center">
        <form action="/update/{{ $agenda->id }}" method="POST" class="mt-4 mx-auto" style="max-width: 400px;">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $agenda->name }}">
            </div>
    
            <div class="mb-3">
                <label for="telephone" class="form-label">Telefone:</label>
                <input type="text" name="telephone" id="telephone" class="form-control" value="{{ $agenda->telephone }}">
            </div>
    
            <div class="mb-3">
                <label for="compromisso" class="form-label">Compromisso:</label>
                <input type="text" name="compromisso" id="compromisso" class="form-control" value="{{ $agenda->compromisso }}">
            </div>
    
            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Data de Aniversário:</label>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{ $agenda->date_of_birth }}">
            </div>
    
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ $agenda->email }}">
            </div>
    
            <button type="submit" class="btn btn-primary">Salvar Alteração</button>
        </form>
    </div>
</div>


@endsection
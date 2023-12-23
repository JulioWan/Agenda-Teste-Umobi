@extends('layouts.main')

@section('title', $agenda->title)

@section('content') {{-- essa serve para o conteudo*/ --}}



<div class="container text-center mt-5">
    <h2>Detalhes do Contato</h2>
    <p>Nome: {{ $agenda->name }}</p>
    <p>Telefone: {{ $agenda->telephone }}</p>
    <p>Compromisso: {{ $agenda->compromisso }}</p>
    <p>Data de Aniversário: {{ $agenda->date_of_birth }}</p>
    <p>E-mail: {{ $agenda->email }}</p>

    <a href="/edit/{{ $agenda->id }}" class="btn btn-primary">Editar Informações</a>

    <form action="/{{$agenda->id}}" method="POST" class="mt-3">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Deletar</button>
    </form>
</div>





@endsection
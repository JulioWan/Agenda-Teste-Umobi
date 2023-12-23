@extends('layouts.main')

@section('title', 'Welcome')

@section('content') 

<div class="infoInicio container mt-5">
    <h2>Contatos</h2>
    <table class=" table table-sm  table-bordered ">
        <thead>
            <tr>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Compromisso</td>
            </tr>
        </thead>
    <tbody>
        @foreach ($agendas as $agenda)
            <tr>
                <td>{{ $agenda->name}}</td>
                <td>{{ $agenda->telephone}}</td>
                <td>{{ $agenda->compromisso}}</td>
                <td><a href="/{{ $agenda->id}}" class="btn btn-primary">Saber mais</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>


    
</div>    





@endsection
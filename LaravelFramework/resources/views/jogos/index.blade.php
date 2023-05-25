@extends('layouts.app')

@section('title', 'Listagem' )

@section('content')
<h1> Listagem de jogos</h1>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ano de riação</th>
        <th scope="col">Valor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
    </tbody>
    </table>
@endsection
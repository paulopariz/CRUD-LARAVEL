@extends('students.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Página do aluno</div>
    <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">Nome : {{ $students->name }}</h5>
        <p class="card-text">Email : {{ $students->email }}<p>
        <p class="card-text">Telefone : {{ $students->phone }}</p>

</div>
    </hr>
    </div>
</div>
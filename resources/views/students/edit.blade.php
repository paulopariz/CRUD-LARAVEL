@extends('students.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Editar aluno</div>
    <div class="card-body">

    <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Nome</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$students->email}}" class="form-control"></br>
        <label>Telefone</label></br>
        <input type="text" name="phone" id="phone" value="{{$students->phone}}" class="form-control"></br>
        <input type="submit" value="Editar" class="btn btn-success"></br>
    </form>

    </div>
</div>

@stop
@extends( 'students.layout')
@section( 'content' )

<div class="card" style="margin:20px;">
    <div class="card-header">Resgistrar aluno</div>

    <div class="card-body">

        <form action="{{ url('student') }}" method="post">
            {!! csrf_field() !!}
            <label>Nome</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>

            <label>Email</label></br>
            <input type="text" name="email" id="email" class="form-control"></br>

            <label>Telefone</label></br>
            <input type= "text" name= "phone" id="phone" class="form-control"></br>


            <input type="submit" value="Resgistar" class="btn btn-success"></br>
        </form>

</div>
</div>

@stop
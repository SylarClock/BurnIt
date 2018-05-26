
@extends('Usuarios.creatUser')
 


@section('form')


{!! Form::open(['url' => 'accion']) !!}
	{{Form::label('email', 'E-Mail Address')}}

	<div class="form-group">
		{!!Form::label('Nombre', null, ['style'=> 'color:white'])!!}
		{!!Form::text('Nombre', null, ['class' => 'form-control', 'placeholder'=> 'Nombre'])!!}
	</div>

	<button type="submit">ok</button>
{!! Form::close() !!}

  <form action="{{ url('accion')}}" method="POST">
    <div class="form-group">
      <label for="nombre" style="color:white">Nombre kkkkk</label>
      <input type="text" class="form-control" name="nombre" id=nombre>
    </div>

    <div class="form-group">
      <label for="email" style="color:white">Email</label>
      <input type="email" class="form-control" name="email" id=email>
    </div>

    <div class="form-group">
      <label for="pass" style="color:white">Password</label>
      <input type="Password" class="form-control" name="pass" id=pass>
    </div>
    <button type="submit" class="btn btn-success col-xs-12">OK</button>
  </form>

  @endsection

@extends('Usuarios.creatUser')
 


@section('form')

  <form class="">
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" name="nombre" id=nombre>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id=email>
    </div>

    <div class="form-group">
      <label for="pass">Password</label>
      <input type="Password" class="form-control" name="pass" id=pass>
    </div>
    <button class="btn btn-success col-xs-12">OK</button>
  </form>

  @endsection
  
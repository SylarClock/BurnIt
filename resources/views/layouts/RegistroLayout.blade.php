@yield('head')
@yield('navbarUnload')



<div class="container">

	{!!Form::open(['route' =>'usuario.store', 'method' => 'POST', 'onsubmit' => 'return validaResgistro()'])!!}
		<div class="form-group row">
			<h2>
				¿Listo para unirte a BURNIT?
			</h2>
			<h6>
				Por favor llena los siguientes datos :)
			</h6>
		</div>

	   	<div class="form-group row" id="group_nombre">
		   <label for="txt_nombre" class="col-sm-2 col-form-label">Nombre</label>
		   <div class="col-sm-8">
				<input type="text" class="form-control" id="txt_nombre" placeholder="Nombre" name="name">
		   </div>
		   <span class="help-inline hidden col-sm-2">Por favor escribe un nombre</span>
	   	</div>

		   <div class="form-group row" id="group_apellido">
				<label for="txt_apellido" class="col-sm-2 col-form-label">Apellido(s)</label>
				<div class="col-sm-8">
					 <input type="text" class="form-control" id="txt_apellido" placeholder="Apellido(s)" name="lastname">
				</div>
				<span class="help-inline hidden col-sm-2">Por favor escribe apellido(s)</span>
			</div>

			<div class="form-group row" id="group_correo">
					<label for="txt_correo" class="col-sm-2 col-form-label">Correo Electrónico</label>
					<div class="col-sm-8">
					  <input type="email" class="form-control" id="txt_correo" placeholder="Correo Electrónico" name="email">
					</div>
					<span class="help-inline hidden col-sm-2"></span>
			</div>

			<div class="form-group row" id="group_pass">
					<label for="txt_pass" class="col-sm-2 col-form-label">Contraseña</label>
					<div class="col-sm-8">
					  <input type="password" class="form-control" id="txt_pass" placeholder="Contraseña">
					</div>
					<span class="help-inline hidden col-sm-2">La contraseña está vacia</span>
			</div>

			<div class="form-group row" id="group_passConfirma">
					<label for="txt_passConfirma" class="col-sm-2 col-form-label">Confirmar Contraseña</label>
					<div class="col-sm-8">
					  <input type="password" class="form-control" id="txt_passConfirma" placeholder="Confirmar Contraseña" name="password">
					</div>
					<span class="help-inline hidden col-sm-2"></span>
			</div>

			<div class="form-group row" id="group_fechaNacimiento">
					<label for="txt_fechaNacimiento" class="col-sm-2 col-form-label">Nombre</label>
					<div class="col-sm-8">
						 <input type="date" class="form-control" id="txt_fechaNacimiento" name="birthdate">
					</div>
					<span class="help-inline hidden col-sm-2">Por favor introduce una fecha</span>
			</div>

			<div class="form-group row">
					<div class="col-sm-10">
					  <button type="submit" class="btn btn-primary">Registrarme</button>
					</div>
			</div>

	{!!Form::close()!!}

		  
	   </div>

		<script src="{{ asset('js/jquery.js')}}"></script>
		<script src="{{ asset('js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('js/validacionesForm.js')}}"></script>

@extends('admin.template.main')


@section('title','Crear Usuario')
@section('content')
{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
	<div class="form-group">
		{!! Form::label('name','Nombre')!!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required',]) !!}

	</div>

	<div class="form-group">
		{!! Form::label('email','Correo Electronico')!!}
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required',]) !!}

	</div>

	<div class="form-group">
		{!! Form::label('password','Contraseña')!!}
		{!! Form::password('password',  ['class' => 'form-control', 'placeholder' => '**********', 'required',]) !!}

	</div>

	<div class="form-group">
		{!! Form::label('type','Tipo')!!}
		{!! Form::select('type', ['' => 'Seleccione','member' => 'Miembro','admin' => 'Administrador' ],null,['class' => 'form-control'] ) !!}

	</div>
	<div class="form-group align-middle">
		{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
	</div>



{!! Form::close() !!}
@endsection





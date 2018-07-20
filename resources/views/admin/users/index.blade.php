@extends('admin.template.main')
@section('title','Lista de Usuarios')
@section('content')
<a href="{{ route('users.create') }}" class="btn btn-info">Registrar nuevo USUARIO</a><br>

<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Correo</th>
		<th>Accion</th>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td><a href="" class="btn btn-danger"> <a href=""class="btn btn-warning"></td>


		</tr>
		@endforeach
	</tbody>

</table>
{!! $users->render() !!}

@endsection
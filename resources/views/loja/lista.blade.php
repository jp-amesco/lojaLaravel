@extends('layout.app')

@section('content')
<table class="table">
	<th scope="col">ID</th>
	<th scope="col">Nome</th>
	<th scope="col">Email</th>
	<th scope="col">Senha</th>
	<tbody>
		@foreach($usuariolista as $usuario)
			<tr>
				<td>{{ $usuario->id }}</td>
				<td>{{ $usuario->nome }}</td>
				<td>{{ $usuario->email }}</td>
				<td>{{ $usuario->senha }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
@endsection
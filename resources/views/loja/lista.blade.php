@extends('layout.app')

@section('content')
<table class="table">
	<th scope="col">ID</th>
	<th scope="col">Nome</th>
	<th scope="col">Email</th>
	<th scope="col">Senha</th>
	<th scope="col">####</th>
	<tbody>
		@foreach($usuariolista as $usuario)
			<tr>
				<td>{{ $usuario->id }}</td>
				<td>{{ $usuario->nome }}</td>
				<td>{{ $usuario->email }}</td>
				<td>{{ $usuario->senha }}</td>
				<td>
					<a href="{{ $usuario->id}}/editar" class="btn btn-default btn-sm">Editar</a>
					{!! Form::open(['method' => 'DELETE', 'url' => 'delete/'.$usuario->id, 'style'=>'display:inline' ]) !!}
						<button type="submit" class="btn btn-default btn-sm">Excluir</button>
					{!! Form::close() !!}
				</td>
			</tr>
		@endforeach
	<tbody>
</table>
@endsection
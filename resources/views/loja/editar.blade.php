@extends('layout.app')

@section('content')
	{!! Form::model($usuarioeditar, array('method'=> 'PATCH', 'url' => 'atualizar/'.$usuarioeditar->id))!!}
	
	{!! Form::label('nome', 'Nome') !!}
	{!! Form::input('text', 'nome', null) !!}	

	{!! Form::label('email', 'Email') !!}
	{!! Form::input('text', 'id', null) !!}

	{!! Form::label('senha', 'Senha') !!}
	{!! Form::password('senha') !!}

	{!! Form::label('confirmasenha', 'Confirme a senha') !!}
	{!! Form::password('confirmasenha') !!}

	{!! Form::submit('Salvar', array('class'=>'btn btn-primary')) !!}

	{!! Form::close()!!}
@endsection
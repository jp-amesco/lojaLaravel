@extends('layout.app')

@section('content')
<div class="container">  
  {!! Form::open(['url'=>'criaUsuario']) !!}
    {!! Form::label('nome', 'Nome') !!}
    {!! Form::input('text', 'nome', null)!!}

    {!! Form::label('nome', 'email') !!}
    {!! Form::input('text', 'email', null)!!}

    {!! Form::label('nome', 'Senha') !!}
    {!! Form::input('text', 'senha', null)!!}

  {!! Form::close() !!}
</div>
@endsection

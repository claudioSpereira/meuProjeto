
@extends('layouts.app')

@section('content')

 <div class="container">
 <h1>Novo Impressora</h1>

 @if ($errors->any())
 <ul class="alert alert-warning">
 @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 @endif

 {!! Form::open(['url'=>'produtos/store']) !!}

 <!-- Nome Form Input -->
 <div class="form-group">
 {!! Form::label('nome', 'Nome:') !!}
 {!! Form::text('nome', null, ['class'=>'form-control']) !!}
 </div>

 <!-- Descricao Form Input -->

 <div class="form-group">
 {!! Form::label('', 'Descrição:') !!}
 {!! Form::textarea('descricao', null, ['class'=>'form-control']) !!}
 </div>

 <div class="form-group">
 {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
 </div>

 {!! Form::close() !!}

 </div>
 @endsection

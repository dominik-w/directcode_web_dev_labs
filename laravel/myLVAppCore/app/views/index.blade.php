@extends('layout')
 
@section('title') Login @stop

@section('content')
 
<div class='col-lg-4 col-lg-offset-4'>
 
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif
 
    <h1><i class='fa fa-lock'></i> Login</h1>
 
    {{ Form::open(['role' => 'form']) }}
 
    <div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, array('placeholder' => 'Username', 'class' => 'form-control')) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
    </div>
 
    <div class='form-group'>
        {{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
    </div>
 
    {{ Form::close() }}
 
</div>
 
@stop
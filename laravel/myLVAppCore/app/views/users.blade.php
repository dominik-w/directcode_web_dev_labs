@extends('layout')

<h1>Our users</h1>

@section('content')
    @foreach($users as $user)
        <p>{{ $user->first_name }}</p>
    @endforeach
@stop

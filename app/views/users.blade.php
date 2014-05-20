@extends('layout')


@section('content')
	{{--Users! from view --}}

	@foreach($users as $user)
		<p>{{$user->name}} - {{$user->email}}</p>
	@endforeach
@stop


@section('pagetitle')
	<h1>Woo page title</h1>
	<img src='http://placehold.it/780x400' alt='' class='img-responsive'>	
@stop
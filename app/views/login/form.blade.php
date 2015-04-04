@extends('layouts.auth')
@section('content')
	{{Form::open(array('action'=>'LoginController@postLogin'))}}

	{{Form::email('email')}}
	{{Form::password('password')}}
	{{Form::submit('submit')}}

	{{Form::close()}}
@stop
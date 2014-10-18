@extends('_master')

@section('title')
	Random User Generator
@stop

@section('bodyid')
	"faker"
@stop

@section('pagehead')
	Random User Fabrication
@stop

@section('subhead')
	Use the form below to fabricate some random users for your application.
@stop

@section('content')

	{{ Form::open(array(
		'url' => 'faker'
	)) }}

		{{ Form::label('numUsers', 'How many users?') }}
    	{{ Form::text('numUsers', '1') }}

		{{ Form::submit('Submit') }}

	{{ Form::close() }}
@stop
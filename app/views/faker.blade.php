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

@section('form')

	<br />

	{{ Form::open(array(
		'url' => 'faker'
	)) }}

		{{ Form::label('numUsers', 'How many users?') }}
    	{{ Form::text('numUsers', '1', array(
    		'maxlength' => 2
    	)) }}

    	<br />

    	{{ Form::label('address', 'Include address?') }}
    	{{ Form::checkbox('address', '1'); }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


    	{{ Form::label('birthday', 'Include birthday?') }}
    	{{ Form::checkbox('birthday', '1'); }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


    	{{ Form::label('blurb', 'Include profile blurb?') }}
    	{{ Form::checkbox('blurb', '1'); }}

    	<br /><br />

		{{ Form::submit('Get your users!', 
			array('class' => 'btn btn-success'
		)) }}

	{{ Form::close() }}
@stop
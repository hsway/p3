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
    	{{ Form::text('numUsers', $numUsers, array(
    		'maxlength' => 2
    	)) }} (max = 99)

    	<br />

    	{{ Form::label('address', 'Include address?') }}
    	<input type="checkbox" id="address" name="address" value="1" {{ ($address) ? 'checked="checked"' : '' }} >
    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


    	{{ Form::label('birthday', 'Include birthday?') }}
    	<input type="checkbox" id="birthday" name="birthday" value="1" {{ ($birthday) ? 'checked="checked"' : '' }} >
    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


    	{{ Form::label('blurb', 'Include profile blurb?') }}
    	<input type="checkbox" id="blurb" name="blurb" value="1" {{ ($blurb) ? 'checked="checked"' : '' }} >

    	<br /><br />

		{{ Form::submit('Get your users!', 
			array('class' => 'btn btn-success'
		)) }}

	{{ Form::close() }}
@stop
@extends('_master')

@section('title')
	Hank Sway - DWA15 P3 Home
@stop

@section('bodyid')
	"home"
@stop

@section('pagehead')
	DWA15 Project 3
@stop

@section('subhead')
	A lorem ipsum generator and fabricator of random users. By Hank Sway.
@stop

@section('content')
	<div class="row">
  		<div class="col-md-6">
  			<a href="/lorem-ipsum" class="btn btn-primary btn-lg" role="button">
  			<span class="glyphicon glyphicon-pencil"></span>&nbsp; Generate some lorem ipsum</a>
  		</div>
  		<div class="col-md-6">
  			<a href="/faker" class="btn btn-primary btn-lg active" role="button">
  			<span class="glyphicon glyphicon-user"></span>&nbsp; Create some random users</a>
  		</div>
	</div>
@stop
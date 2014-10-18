@extends('faker')

@section('belowfold')

	<h2>Here they are:</h2>

	<?php
		$faker = Faker\Factory::create();
		for ($i=0; $i < $numUsers; $i++) {
  			echo $faker->name . '<br />';
		}
	?>

@stop
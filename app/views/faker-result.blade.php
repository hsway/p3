@extends('faker')

@section('result')

	<?php
		$faker = Faker\Factory::create();
		for ($i=0; $i < $numUsers; $i++) {
  			echo $faker->name . '<br />';
		}
	?>

@stop
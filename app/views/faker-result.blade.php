@extends('faker')

@section('result')

	<?php
		$faker = Faker\Factory::create();
		//$faker = Faker::create();
		for ($i=0; $i < $numUsers; $i++) {
  			echo $faker->name . '<br />';
		}
	?>

@stop
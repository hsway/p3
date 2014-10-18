@extends('faker')

@section('belowfold')

	<h2>Here they are:</h2>

	<?php
		$faker = Faker\Factory::create();
		for ($i=0; $i < $numUsers; $i++) {
  			echo $faker->name . '<br />';

  			if ($address) {
  				echo $faker->address . '<br />';
  			}

  			if($birthday) {
  				echo Faker\Provider\DateTime::date($format = 'Y-m-d', $max = 'now') . '<br />';
  			}

  			if ($blurb) {
  				echo $faker->text . '<br />';
  			}

  			if ($address || $birthday || $blurb) {
  				echo '<br />';
  			}
		}
	?>

@stop
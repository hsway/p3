@extends('lorem-ipsum')

@section('result')

	<?php
		//$generator = new LoremIpsum::Generator();
		$generator = new Badcow\LoremIpsum\Generator();
		$text = $generator->getParagraphs($paragraphs);
		echo implode('<p>', $text);
	?>

@stop
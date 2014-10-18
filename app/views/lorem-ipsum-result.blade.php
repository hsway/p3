@extends('lorem-ipsum')

@section('belowfold')

	<h2>Here's your text:</h2>

	<?php
		$generator = new Badcow\LoremIpsum\Generator();
		$text = $generator->getParagraphs($paragraphs);
		echo implode('<p>', $text);
	?>

@stop
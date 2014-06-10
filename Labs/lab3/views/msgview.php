<?php

$name='get->$yaName';
$mug='$yaMug'

?>
<!doctype html>
<html>
	<head>
		<title>Im here!</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	</head>
	<body>
		<h1 class="col-md-12 col-sm-12">hello world</h1>
		<form class="col-md-12 col-sm-12 <?=$css?>" method='GET'>
			<?=$error?>
			<input type='text' name='yaName' class="form-control"/>
			<input type='text' name='yaPass' class="form-control">
			<button class="btn btn-default">Metric BUT TON</button>
		</form>
	</body>
</html>

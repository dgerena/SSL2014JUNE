<?php
$error='';
$css='';
if(isset($_GET['yaName'])){
	$css="has-error";
	$error='<label class="control-label">YOU FAIL, GOOD DAY SIR!</label><img src="http://25.media.tumblr.com/tumblr_m0nc7fj44j1rosg7go1_250.gif"/>';
}
?>
<!doctype html>
<html>
	<head>
		<title>Im here!</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	</head>
	<body>
		<h1 class="col-md-12 col-sm-12">hello world</h1>
		<form class="col-md-offset-3 col-md-6 col-sm-6 <?=$css?>" method='GET'>
			<?=$error?>
			<lebel>Username:</label>
			<input type='text' name='yaName' class="form-control"/>
			<lebel>Password:</label>
			<input type='text' name='yaPass' class="form-control">
			<button class="btn btn-default">Metric BUT TON</button>
		</form>
	</body>
</html>


<?php
if(isset($_GET['weather'])){
	// first i need the info in a url then i need to use the lat long to get the correct location. 
	$response = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$_GET['weather']);
	$response=json_decode($response, true);
}
$direction = $response['wind']['deg'];
switch ($direction){
    case ($direction > 303 and $direction <= 360) or ($direction >= 0 && $direction <= 33):
        $wDir = "North";
    case $direction > 123 and $direction <= 213:
        $wDir = "South";
        break;
    case $direction > 33 and $direction <= 123:
        $wDir = "East";
        break;
    case $direction > 213 and $direction <= 303:
        $wDir = "West";
        break;
}

?>
<html>
	<head>
		<link href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' rel='stylesheet'>
		<link href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/flick/jquery-ui.min.css' rel='stylesheet'>
		<script type='text/javascript' src='http://code.jquery.com/jquery-2.0.3.js'></script>
		<script src='//code.jquery.com/ui/1.10.4/jquery-ui.js'></script>
		<script src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>
		<script type="text/javascript" src="main.js"></script>
	</head>
	<body>
		<form method="GET" action="api.php">
			<input type="text" name="weather" id="city" placeholder="Enter CIty Name"/>
			<div id="cityresponse"></div>
			<h1>CURRENT LOCATION INFORMATION</h1>
			<?='Tempature '.(string)((9/5)*(floatval($response['main']['temp'])-273)+32).' &degF';?>
			<br/>
			<?='Humidity '.$response['main']['humidity'];?>
			<br/>			
			<?='Current Weather '.$response['weather'][0]['description'];?>
			<img src="http://openweathermap.org/img/w/<?=$response['weather'][0]['icon'];?>.png" />
			<br/>
			<?='Wind Speed and Direction '.$response['wind']['speed'].' Mph From the '.$wDir;?>

		</form>
	</body>
</html
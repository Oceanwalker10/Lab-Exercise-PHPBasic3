<html lang="en">
<head>
   <!-- Latest compiled and minified Bootstrap Core CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<!-- Bootstrap theme -->
<link href="../../dist/css/bootstrap-theme.min.css" rel="stylesheet">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Exercise 10-2 | Instatiating Classes</title>
</head>
<body>

<header>
<h1>Weather forecast using classes</h1>
</header>

<div class='container'>
<?php 

ini_set("display_errors",1);
date_default_timezone_set('GMT');
include_once("Forecast.class_v2.php");

$today = time();
$oneday = 60*60*24;

$forecast = array();
$dayOne = new Forecast (date("d M, Y", $today),30,20,"sunny");
$dayTwo = new Forecast (date("d M, Y", $today + $oneday),32,22,"sunny");
$dayThree = new Forecast (date("d M, Y", $today + 2*$oneday),18,16,"rainy");
$dayFour = new Forecast (date("d M, Y", $today + 3*$oneday),35, 22, "clear and sunnny");
$dayFive = new Forecast (date("d M, Y", $today + 4*$oneday),20, 10, "cold and snow");

$forecast[]=$dayOne;
$forecast[]=$dayTwo;
$forecast[]=$dayThree;
$forecast[]=$dayFour;
$forecast[]=$dayFive;

foreach($forecast as $oneDay){
    echo $oneDay;
}


?>
</div>

</body>
</html>

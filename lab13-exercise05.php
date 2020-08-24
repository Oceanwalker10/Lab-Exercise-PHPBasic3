<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Exercise 13-5 Inheritance</title>   
   
   <!-- Latest compiled and minified Bootstrap Core CSS -->
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header>
<h1>A List of Vehicles</h1>
</header>


<div class='container'>
<?php 

ini_set("display_errors",1);
date_default_timezone_set('GMT');

include_once("Vehicle.class_v1.php");


$modelT =   new Vehicle("Ford", "Model-T", "Gas","30");
$hybridCar =   new LandVehicle("Ford", "Prius", "Hybrid","160", 4);
$boat = new WaterVehicle("White Star Line", "Titanic",
    "Steam","24",3327,1178);

echo $modelT;
echo $hybridCar;
echo $boat;
?>
</div>

</body>
</html>

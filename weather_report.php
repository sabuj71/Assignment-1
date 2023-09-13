<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weather_report</title>
    <style>
        <?php include"common.css"?>
    </style>
</head>
<body>
    <div class="container">
        <?php 
            $weatherTemperature=17;
            if($weatherTemperature>50 || $weatherTemperature<15){
                echo "This is not a valid value.Please enter a valid value";
            }
            elseif($weatherTemperature>=30 && $weatherTemperature<50){
                echo "It's warm.";
            }elseif($weatherTemperature>=20 && $weatherTemperature<30){
                echo "It's cool";
            }
            else{
                echo"It's freezing!";
            }
        ?>
    </div>
</body>
</html>
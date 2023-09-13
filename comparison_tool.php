<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compares two numbers and displays the larger one</title>
    <style>
        <?php include"common.css" ?>
    </style>
</head>
<body>
    <div class="container">
        <h1>displays the larger one</h1>
        <?php 
        
        $num1=66;
        $num2=99;
        $largeNumber=($num1>$num2 && $num2<$num1)? " $num1" : "$num2";
        echo "Large Number is = $largeNumber";
        ?>
    </div>
</body>
</html>
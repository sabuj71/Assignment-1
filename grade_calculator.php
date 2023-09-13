<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade calculator</title>
    <style>
        <?php include"common.css" ?>
    </style>
</head>
<body>
    <div class="container">
        <h1>grade_calculator</h1>

        <?php 
            $num1=80;
            $num2=88;
            $num3=75;
            $total=$num1+$num2+$num3;
            $average=$total/3;
            if($average>=80 && $average<=100){
                echo"Your average score=$average";
                echo "\n";
                echo" Your grade = A ";
            }
            elseif($average>=70 && $average<80){
                echo "Your average score=$average";
                echo "\n";
                echo"Your grade = B ";
            }
            elseif($average>=60 && $average<70){
                echo"Your average score=$average";
                echo "\n";
                echo" Your grade = C ";
            }
            elseif($average>=50 && $average<60){
                echo"Your average score=$average";
                echo "\n";
                echo" Your grade = D ";
            }
            else{
                echo"Your average score=$average";
                echo "\n";
                echo " Your grade = F ";
            }
        ?>
    </div>
    
</body>
</html>
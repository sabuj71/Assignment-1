<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple calculator</title>
    <style>
        <?php include"common.css" ?>
    </style>
</head>
<body>
    <div class="container">
        <h1>Simple calculator</h1>
        <form action="" method="post">
            <input type="number" name="num1" placeholder="Enter a first number">
            <input type="number" name="num2" placeholder="Enter a second number">
            <select name="operation" >
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select>
            <button type="submit">Calculate</button>
        </form>

        <div id="result">
        <?php 

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $num1=$_POST["num1"];
                $num2=$_POST["num2"];
                $operation=$_POST["operation"];
                
                switch($operation){
                    case "add":
                        $result=$num1 + $num2 ;
                        echo "result is= $result";
                        break;
                    case "subtract":
                        $result=$num1 - $num2;
                        echo "result is = $result";
                        break;
                    case "multiply":
                        $result=$num1*$num2;
                        echo "result is = $result";
                        break;
                    case "divide":
                        if($num2 !=0){
                            $result=$num1/ $num2;
                            echo "result is = $result";
                        }else{
                            echo"Cannot Divide By Zero";
                        }
                }
            }

            ?>
        </div>
    </div>
</body>
</html>
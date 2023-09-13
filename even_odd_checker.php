<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>even_odd_checker</title>
    <style>
        <?php include"common.css"?>
    </style>
</head>
<body>
    <div class="container">
        <h1>even_odd_checker</h1>
        <form  method="post">
            <input type="number" name="score" placeholder="enter a number">
            <select name="operation" id="">
                <option value="even-or-odd">even-or-odd</option>
            </select>
            <button type="submit">Check Number</button>
        </form>
        <div id="result">
            <?php 
                 if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $score=$_POST["score"];
                    $operation=$_POST["operation"];
                }
                switch($operation){
                    case "even-or-odd":
                        if($score%2==0){
                            echo" $score this is even number";
                        }else{
                            echo"$score this is odd number";
                        }
                }
            ?>
        </div>
        
    </div>
</body>
</html>

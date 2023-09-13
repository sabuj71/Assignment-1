<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <style>
        <?php include"common.css" ?>
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Temperature Converter</h1>
        <form action="" method="post">
            <input type="number" name="temperature" placeholder="Enter Temperature" required>
            <select name="conversion_type">
                <option value="celsius-to-fahrenheit">Celsius to Fahrenheit</option>
                <option value="fahrenheit-to-celsius">Fahrenheit to Celsius </option>
            </select>
            <button type="submit">Covert</button>
        </form>
        <div id="converted-temperature">
            <?php 
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                
                $temperature=$_POST["temperature"];
                $conversionType=$_POST["conversion_type"];
            }
            switch($conversionType){
                case"celsius-to-fahrenheit":
                    $fahrenheit=($temperature*9/5)+32;
                    echo "$temperature celsius is = $fahrenheit F";
                    break;
                case "fahrenheit-to-celsius":
                    $celsius=($temperature-32)*5/9;
                    echo "$temperature fahrenheit is = $celsius C";
            }

            ?>
        </div>
    </div>

    

</body>
</html>

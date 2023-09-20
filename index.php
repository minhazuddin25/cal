<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <div class="container">
        <h1>Basic calculator</h1>
        <form action="" method="POST">
            <input type="number" name="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br>
            <select name="operation">
                <option value="add">Addition</option>
                <option value="subtrack">subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="Divide">Division</option>
                <option value="binary">Binary coversion</option>
                <option value="octal">Octal conversion</option>
                <option value="hexadecimal">Hexadecimal Conversion</option>
            </select><br>
            <button type="submit">Calculate</button>
        </form>
        <div id="result">

<?php
if($_SERVER["REQUEST_METHOD"] == "post"){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    switch ($operation){
        case "add":
            $result = $num1+$num2;
            echo "Result: $result";
            break;
        case "subtrack":
            $result = $num1-$num2;
            echo "Result: $result";
            break;
        case "multiply":
            $result = $num1 * $num2;
            echo "Result: $result";
            break;
        case "divide":
            if($num2 != 0){
                $result = $num1/$num2;
                echo "Result: $result";
            }else{
                echo "Connot Divide by Zero.";
            }
            break;
        case "binary":
            echo "Binary:" . decbin($num1);
            break;
        case "octal":
            echo "Octal:" . decoct($num1);
            break;
        case "hexadecimal":
            echo "Hexadecimal: " . dechex($num1);
            break;
           

        
    }
}
?>



        </div>
    </div>

</body>
</html>
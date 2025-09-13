<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
      body{
      background-color: grey;
      }
     .main{
        background-color: gray;
        height: 350px;
        width: 350px;
        border-radius:20px;
        margin-top: 100px;
        padding: 5px;
        box-shadow: 2px 2px 4px 4px rgba(0, 0, 0, 0.5)
     }
     h1{
        font-size: 40px;
     }
     .box{
      height: 40px;
      width: 270px;
      border-radius: 10px;
      text-align: center;
      font-size: 20px;
      border: 2px solid black;
     }
     .select{
      height: 40px;
      width: 200px;
      border-radius: 5px;
      text-align: center;
      font-size:18px;
      border: 2px solid black;
     }
     .calculation{
      height: 40px;
      width: 180px;
      border-radius: 5px;
      cursor: pointer;
      border: 2px solid black;
      font-size:18px;
     }
     .result{
        font-size: 40px;
     }
     .placeholder{
        font-size: 15px;
     }
    </style>
</head>
<body>
    <center>
        <form method="POST">
     <div class="main">
     <h1>Simple Calculator</h1>
     <input type="number" class="box" placeholder="Enter first number" required name="num1">
     <br><br>
     <input type="number" class="box" placeholder="Enter second number" required name="num2">
     <br><br>
     <select class="select" name="operation">
        <option value="add">Addition</option>
        <option value="subtract">Subtraction</option>
        <option value="multiply">Multiplication</option>
        <option value="divide">Division</option>
     </select>
     <br><br>
     <input type="submit" value="Calculation" class="calculation" required name="calculate">
     </div>
     </form>
</body>
</html>
<?php
if(isset($_POST['calculate']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;

    switch ($operation)
    {
     case 'add':
     $result = $num1 + $num2;
     break;
     case 'subtract':
     $result = $num1 - $num2;
     break;
     case 'multiply':
     $result = $num1 * $num2;
     break;
     case 'divide':
     if($num2 == 0){
     $result = "Cannot divided by zero!";}
     else{
     $result = $num1 / $num2;
     }
     break;
     default:
     $result = "Invalid operation!";   
     break;
    }
    echo "<div class='result'><h3>Result: $result</h3></div>";
    
}


?>
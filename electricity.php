<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Electricity Bill</title> 
</head> 
<body> 
<h1>Electricity Bill</h1> 
<form method="post" action="#"> 
    Consumer ID: <input type="number" name="id" required><br> 
    Name: <input type="text" name="name" required><br> 
    Previous Reading: <input type="number" name="prev" required><br> 
    Present Reading: <input type="number" name="pres" required><br><br> 
    <input type="submit" value="Calculate"> 
</form> 

<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){ 

    $id = $_POST["id"]; 
    $name = $_POST["name"]; 
    $prev = $_POST["prev"]; 
    $pres = $_POST["pres"]; 
    
   
    $units = $pres - $prev; 

    echo "<hr>";
    echo "<h3>Kerala State Electricity Board (KSEB)</h3>"; 
    echo "<p>Consumer ID: $id</p>"; 
    echo "<p>Consumer Name: $name</p>"; 
    echo "<p>Units Consumed: $units</p>"; 

  
    if ($units <= 100) { 
        $amt = $units * 3; 
    } 
    elseif ($units > 100 && $units <= 200) { 
        $amt = $units * 4; 
    } 
    elseif ($units > 200 && $units <= 300) { 
        $amt = $units * 5; 
    } 
    else { 
        $amt = $units * 6; 
    } 

    echo "<h4>Total Amount: Rs. $amt</h4>"; 
} 
?> 

</body> 
</html>


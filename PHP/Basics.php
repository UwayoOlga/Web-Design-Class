<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Hello world! <br>"; 
print("Variable declaration <br>");
print("---------------------- <br>");
//variable declaration
$name="Olga<br>";
$age=21;
echo "$name";
$a=23;
$b=30;
$product=$a*$b;
//concantination
echo"$product.$name";
//length method
echo strlen("Hello world!");
echo("<br>");
//checking position
echo strpos("Display this","this");
echo("<br>");
// date function 
$check=date("Y");
$check_month=date("M");
$check_day=date("D");
$check_day2=date("d");

echo "$check" . "<br>";
echo "$check_month". "<br>";
echo "$check_day2"  ;
echo "$check_day" . "<br>";
?>
</body>
</html>

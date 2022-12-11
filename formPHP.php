<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($_POST['OP'] == "+"){
        echo ($_POST['FN'] + $_POST['SN']);
    }
    elseif ($_POST['OP'] == "-"){
        echo ($_POST['FN'] - $_POST['SN']);
    }
    elseif ($_POST['OP'] == "*"){
        echo ($_POST['FN'] * $_POST['SN']);
    }
    elseif ($_POST['OP'] == "/"){
        echo ((int)($_POST['FN'] / $_POST['SN']));
        echo '<br>';
        echo ($_POST['FN'] % $_POST['SN']);
    }
    else {
        echo "Unknown Operation";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Enter first Num</label>
        <input type="number" name="FN">
        <br>
        <label for="">Enter second Num</label>
        <input type="number" name="SN">
        <br>
        <label for="">Enter Operator</label>
        <input type="text" name="OP">
        <br>
        <input type="submit" value="Send">
    </form>
</body>
</html>







<?php 
echo "<hr>";
include_once("./in1.php");
include_once("./in2.php");

echo $a . "<br>" . $b;

$a = 20;
$b = 60;
echo "<hr>";
include_once("./in1.php");
include_once("./in2.php");

echo $a . "<br>" . $b;

// include ("./in2.php");
// echo $a . "<br>" . $b

?>






<?php
echo "<hr>";


$help_num = 4;
$nums = [2, 4, 5, 6, 10];

$x = $help_num - $help_num;
$arrayLoops = $help_num;

for($i=($x) ; $i<=$arrayLoops ; $i++){
    $sum = $nums[$i]+$nums[$help_num];
    if($i == ($x)){
        echo "\"$nums[$i] + $nums[$help_num] = $sum\"" . "<br>";
    }elseif ($i == (++$x)){
        echo "\"$nums[$i] " . " + " . $nums[--$help_num] . " = " . ($nums[$i] + $nums[$help_num]) . '"' . "<br>"; 
    }
}

///////////////////////////////////////////////////////////////////////////////////////////

echo "<hr>";


$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = strtr("El%er0", ["%"=>$let_two , "0"=>$let_one]);

echo $str; // Elzero


/////////////////////////////////////////////////////////////////////////////////////////////

echo "<hr>";

$array1 = array("Ram", "Akash", "Rishav");
$array2 = array('24', '30', '45' );
echo "<pre>";
print_r(array_combine($array1, $array2));
echo "</pre>";

echo "<br>";

echo 'PHP version: ' . phpversion();


/////////////////////////////////////////////////////////////////////////////////////////////


echo "<hr>";

$test = "Hello               ";
echo ($test) . "<br>";
echo strlen($test);
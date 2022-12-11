<?php
$a = 1;
?>

<?php
echo 'PHP version: ' . phpversion();
// echo phpinfo();

echo '<hr>';
echo "Tomorrow I'll learn PHP global variables.<br>
This is a bad command: del c:.";

echo '<hr>';


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo $_POST['yourUserName'];
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
        <label for="">Enter your name</label>
        <input type="text" name="yourUserName">
        <br>
        <input type="submit" value="Send">
    </form>
</body>
</html>

<?php

echo '<hr>';


$ipaddress = $_SERVER["REMOTE_ADDR"] ;
echo gettype($ipaddress) . '<br>';
echo "Your IP Address is " . $ipaddress;


echo '<hr>';

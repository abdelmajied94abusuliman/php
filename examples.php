<?php 
    $admins = ["Osama", "Ahmed", "Sayed"];
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        switch($_POST['user']){
            case "Osama":
               echo "The Request Method Is Post And Username Is Osama";
               echo '<br>';
               echo "This Username Osama Is Admin";
               break;
            case "Ahmed":
                echo "The Request Method Is Post And Username Is Ahmed";
                echo '<br>';
                echo "This Username Ahmed Is Admin";
                break;
            case "Sayed":
                echo "The Request Method Is Post And Username Is Sayed";
                echo '<br>';
                echo "This Username Sayed Is Admin";
                break;
            default :
                echo "The Request Method Is Post And Username Is " . $_POST['user'];
                echo '<br>';
                echo "This Username " . $_POST['user'] . " Is not Admin";
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
        <input type="text" name="user">
        <input type="submit" value="Send">
    </form>
</body>
</html>

<?php 
echo '<hr>';
$a = 30;
$b = 20;
$c = 10;

echo ( ($a + $b === $c) ? "A + B = C" : ( ($a + $c === $b) ? "A + C = B" : (($b + $c === $a) ? "B + C = A" : "The End")));
echo '<br>';

echo '<hr>';
?>

<?php
$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) {echo "The Age Is Good To Go<br>";} if (gettype($name) === "string") {echo "The Name Is Good To Go<br>";} if ($country === "Egypt") {echo "The Country Is Good To Go<br>";};
echo '<hr>';
?>

<?php
$genre = "Hack And Slash";
echo '<br>';
switch($genre){
    case ("RPG"):
        echo "I Recommend Ys Games";
        break;
    case ("Hack And Slash"):
        echo "I Recommend Castlevania Games";
        break;
    case ("FPS"):
        echo "I Recommend Uncharted Games";
        break;
    case ("Platform"):
        echo "I Recommend Megaman Games";
        break;
    case ("Puzzle"):
        echo "I Recommend Megaman Games";
        break;
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
}

echo '<br>';

echo '<hr>';

$day = "Fri";

if($day == "Sat" or $day == "Sun" or $day == "Mon"){
    echo "We Are Open All The Day";
} elseif ($day == "Tue" or $day == "Wed") {
    echo "We Are Open From 08:12";
} elseif ($day == "Thu" or $day == "Fri"){
    echo "We Are Closed";
}else {
    echo "Unknown Day";
}
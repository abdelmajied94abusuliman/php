<?php
function checkPrimeNum($num){
    if ($num == 1){
        return "$num is prime number";
    };
    for ($i=2 ; $i<$num ; $i++){
        if ($num%$i == 0){
            return "$num is <strong>not</strong> prime number";
        }
    }
    return "$num is prime number";
}

echo (checkPrimeNum(8));


echo '<br>';
echo '<hr>';
echo '<br>';


$reverseString = "remove";
echo strrev($reverseString);
echo '<br>';
if (ctype_lower($reverseString)){
    echo "Your String is lower case ";
}



echo '<br>';
echo '<hr>';
echo '<br>';



$valueOne = "String";
$valueTwo = 1234;
function swapVar($var1 , $var2){
    $temporalVar = $var1;
    $var1 = $var2;
    $var2 = $temporalVar;
    return array($var1, $var2);
}
echo "valueOne = " . swapVar($valueOne, $valueTwo)[0];
echo '<br>';
echo "valueTwo = " . swapVar($valueOne, $valueTwo)[1];



echo '<br>';
echo '<hr>';
echo '<br>';



$numToCube = 407;
function checkArmstrongNum($num){
    $convertNumberToArray = str_split($num);
    $countArray = 0;
    for ($i=0; $i<count($convertNumberToArray) ; $i++){
        $countArray += pow($convertNumberToArray[$i],3);
    }
    if($countArray == $num){
        echo "$num is Armstrong Number";
    }
    else{
        echo "$num is <strong>not</strong> Armstrong Number";
    }
}
checkArmstrongNum($numToCube);



echo '<br>';
echo '<hr>';
echo '<br>';



$stringForTesting = "Eva, can I see bees in a cave?";
function checkPalindrome($str){
    $stringWithoutSC = str_split(strtolower(str_replace([",","?" , " "] , "" ,$str)));
    $stringTestingReverse = array_reverse($stringWithoutSC);
    $numOfSimilar = 0;
    for ($i=0; $i<count($stringWithoutSC) ;$i++){
        if ( $stringWithoutSC[$i] == $stringTestingReverse[$i]){
            $numOfSimilar += 1;
        }
        else{
            return '<strong>Not</strong> Palindrome. ';
        }
    }
    if ($numOfSimilar == count($stringTestingReverse)){
        return 'It is Palindrome. ';
    }
}
echo checkPalindrome($stringForTesting);



echo '<br>';
echo '<hr>';
echo '<br>';




$arrayOfNumbers = [2, 4, 7, 4, 8, 4];
echo '<pre>';
print_r(($arrayOfNumbers));
echo '</pre>';

echo '<pre>';
print_r(array_unique($arrayOfNumbers));
echo '</pre>';



echo '<br>';
echo '<hr>';
echo '<br>';



$leapYear = 2016;
if (($leapYear-2000)%4==0){
    echo "This is leap year";
}else{
    echo "This is not leap year";
}



echo '<br>';
echo '<hr>';
echo '<br>';



$number1 = 4;
$number2 = 5;
if ($number1 == $number2){
    echo ($number1 + $number2)*3;
}else{
    echo ($number1 + $number2);
}



echo '<br>';
echo '<hr>';
echo '<br>';



$arrayToCheckLarger = [ 1, 5, 9 ];
echo max($arrayToCheckLarger);



echo '<br>';
echo '<hr>';
echo '<br>';



for ($i=1; $i<=10; $i++){
    echo "$i";
    if($i<10){
        echo "-";
    }
}



echo '<br>';
echo '<hr>';
echo '<br>';


for ($i=5; $i>=0; $i--){
    if ($i==5){
        for($y=5; $y>=1; $y--){
            echo 1;
        }
    }
    if($i==4){
        continue;
    }
    if($i==3){
        echo '<br>';
        for($x=3; $x>=1; $x--){
            echo 1;
        }
        for($j=2; $j>=1; $j--){
            echo 2;
        }
    }
    if($i==2){
        echo '<br>';
        for($x=2; $x>=1; $x--){
            echo 1;
        }
        for($j=3; $j>=1; $j--){
            echo 3;
        }
    }
    if($i==1){
        echo '<br>';
        for($x=1; $x>=1; $x--){
            echo 1;
        }
        for($j=4; $j>=1; $j--){
            echo 4;
        }
    }
    if($i==0){
        echo '<br>';
        for($y=5; $y>=1; $y--){
            echo 5;
        }
    }
}



echo '<br>';
echo '<hr>';
echo '<br>';



for ($i=1;$i<=5;$i++){
    if ($i==1){
        for($x=1; $x>=1; $x--){
            echo 1;
        }
        for($j=4; $j>=1; $j--){
            echo 0;
        }
    }
    if($i==2){
        echo '<br>';
        for($j=1; $j>=1; $j--){
            echo 0;
        }
        for($x=1; $x>=1; $x--){
            echo 2;
        }
        for($j=3; $j>=1; $j--){
            echo 0;
        }
    }
    if($i==3){
        echo '<br>';
        for($j=2; $j>=1; $j--){
            echo 0;
        }
        for($x=1; $x>=1; $x--){
            echo 3;
        }
        for($j=2; $j>=1; $j--){
            echo 0;
        }
    }
    if($i==4){
        echo '<br>';
        for($j=3; $j>=1; $j--){
            echo 0;
        }
        for($x=1; $x>=1; $x--){
            echo 4;
        }
        for($j=1; $j>=1; $j--){
            echo 0;
        }
    }
    if($i==5){
        echo '<br>';
        for($j=4; $j>=1; $j--){
            echo 0;
        }
        for($x=1; $x>=1; $x--){
            echo 5;
        }}
}
        



echo '<br>';
echo '<hr>';
echo '<br>';




function printFiba($num){
    $count = [0,1];
    for($i=2; $i<=$num; $i++ ){
        $count[$i] = $count[$i-2] + $count[$i-1];
    }
    echo implode(", " ,$count);
}

printFiba((9));



echo '<br>';
echo '<hr>';
echo '<br>';



$countRepeat = 'Orange Coding Academy';

$lower = substr_count('Orange Coding Academy', "c");
$upper = substr_count('Orange Coding Academy', "C");
echo $lower + $upper;




echo '<br>';
echo '<hr>';
echo '<br>';



echo '<table style="padding:3px; border:1px solid black">';
for ($i=1; $i<=3; $i++){
    echo '<tr>';
        echo "<td style='padding:3px; border:1px solid black'>$i*1 = " . $i*1 . "</td>";
        echo "<td style='padding:3px; border:1px solid black'>$i*2 = " . $i*2 . "</td>";
        echo "<td style='padding:3px; border:1px solid black'>$i*3 = " . $i*3 . "</td>";
    echo '</tr>'.'<br>';
}
echo '<table>';



echo '<br>';
echo '<hr>';
echo '<br>';


$number = 1;
for($i=1; $i<=5;$i++){
    for($x=1; $x<=$i;$x++){
        echo "$number ";
        $number++;
    }
    echo '<br>';
}



echo '<br>';
echo '<hr>';
echo '<br>';




$m =1;
$n=5;
for ($row=1; $row<=5; $row++)
   {
    for ($column=$row; $column<=4; $column++)
    {
     echo "&nbsp;&nbsp;";
    } 
    for($k=1; $k<=$m; $k++)  {
        if($k==1){
            echo "A"; 
        }elseif ($k==2){
            echo " B";
        }elseif($k==3){
            echo " C";
        }elseif($k==4){
            echo " D";
        }elseif($k==5){
            echo " E";
        }else {

        }  
    }
        echo "<br>";
        $m++;
    }



for($i=1; $i<=5; $i++) {
    for($j=$i; $j>=1; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for($k=$n; $k>1; $k--) {
        
        if($k==2){
            echo "A"; 
        }elseif ($k==3){
            echo "A B";
            break;
        }elseif($k==4){
            echo "A B C";
            break;
        }elseif($k==5){
            echo "A B C D";
            break;
        }else {

        }    
    }
    echo "<br>";
        $n--;
}




echo '<br>';
echo '<hr>';
echo '<br>';





class Firstclass {
    function printSentence(){
        echo 'MyClass class has initialized!';
    }
};

$classToTry = new Firstclass();
$classToTry->printSentence();




echo '<br>';
echo '<hr>';
echo '<br>';




class HelloClass {
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function printHelloSentence(){
        echo "Hello All, I am $this->name";
    }
}

$sayHello = new HelloClass("Abd");
$sayHello->printHelloSentence();



echo '<br>';
echo '<hr>';
echo '<br>';



class FactorialClass {
    public $factNum;

    function __construct($num)
    {
        $this->factNum = $num;
    }

    function factorialNumber(){
        $factorial=1;
        for ($x=$this->factNum; $x>=1; $x--)   
        {  
            $factorial = $factorial * $x;   
        }
        echo $factorial;  
    }
}

$findFact = new FactorialClass(4);

$findFact->factorialNumber();



echo '<br>';
echo '<hr>';
echo '<br>';



class SortArray {
    public $arrayNumber;

    function __construct( array $num)
    {
        $this->arrayNumber = $num;
    }

    function sortNumberInArray(){
        asort($this->arrayNumber);
        print_r($this->arrayNumber);
    }
}

$arraySort = [11, -2, 4, 35, 0, 8, -9];

$sortNumberValue = new SortArray( $arraySort );

$sortNumberValue->sortNumberInArray();



echo '<br>';
echo '<hr>';
echo '<br>';



$sdate = new DateTime("1981-11-03");
$edate = new DateTime("2013-09-04");
$interval = $sdate->diff($edate);
echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";



echo '<br>';
echo '<hr>';
echo '<br>';



$sdate = new DateTime("1981-11-03");
$dt = DateTime::createFromFormat('m-d-Y', '11-03-1981')->format('Y-m-d');
echo $dt;







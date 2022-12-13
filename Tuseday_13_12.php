<?php

$color = ['red', 'blue', 'white'];

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[0] carpet, the $color[1] lawn, the $color[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";



echo '<br>';
echo '<hr>';
echo '<br>';



$colors = ['white', 'green', 'red'];

$unOrderList = <<< Text
<ul>
    <li>$colors[0]</li>
    <li>$colors[1]</li>
    <li>$colors[2]</li>
</ul> 
Text;

echo $unOrderList;



echo '<br>';
echo '<hr>';
echo '<br>';



$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

asort($cities);

$keys = array_keys($cities);
echo "The capital of " . $keys[0] . " " . $cities[$keys[0]] . '<br>';
echo "The capital of " . $keys[1] . " " . $cities[$keys[1]] . '<br>';
echo "The capital of " . $keys[2] . " " . $cities[$keys[2]] . '<br>';

echo '<pre>';
print_r($cities);
echo '</pre>';



echo '<br>';
echo '<hr>';
echo '<br>';



$colooooor = array (4 => 'white', 6 => 'green', 11=> 'red');

echo $colooooor[4];


echo '<br>';
echo '<hr>';
echo '<br>';


$newArray = [1 , 2, 3 , 4 , 5];
array_splice($newArray, 3 ,0 , '$');
echo '<pre>';
print_r($newArray);
echo '</pre>';



echo '<br>';
echo '<hr>';
echo '<br>';



$fruits=array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");
asort($fruits);
echo '<pre>';
print_r($fruits);
echo '</pre>';



echo '<br>';
echo '<hr>';
echo '<br>';



$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
function accum($item , $def){
 return $def + $item;
}
$total_temp = array_reduce($temp, "accum", 0);
$avg = $total_temp/count($temp);
echo 'Average Temperature is: ' . $avg;
echo '<br>';
sort($temp);
echo 'List of seven lowest temperatures: ';
for ($i=0;$i<=6;$i++){
    echo $temp[$i] . ' ,';
};
echo '<br>';
echo 'List of seven lowest temperatures: ';
for ($i=count($temp)-7 ; $i<=count($temp)-1 ; $i++ ){
    echo $temp[$i] . ' ,';
};



echo '<br>';
echo '<hr>';
echo '<br>';


$array1=array("color"=>"red",2,4);
$array2=array("a","b","color"=>"green","shape"=>"trapezoid",4);
echo '<pre>';
print_r(array_merge($array1,$array2));
echo '</pre>';



echo '<br>';
echo '<hr>';
echo '<br>';



$colooooooors=array("red","blue","white","yellow");
$newColors =[];
for($i=0;$i<count($colooooooors);$i++){
    $newColors[$i]= strtoupper($colooooooors[$i]);
};

echo '<pre>';
print_r($newColors);
echo '</pre>';



echo '<br>';
echo '<hr>';
echo '<br>';



$colllllooooooors=array("RED","BLUE","WHITE","YELLOW");
$newColors =[];
for($i=0;$i<count($colooooooors);$i++){
    $newColors[$i]= strtolower($colooooooors[$i]);
};

echo '<pre>';
print_r($newColors);
echo '</pre>';



echo '<br>';
echo '<hr>';
echo '<br>';



$numbers = [200,204,208,212,216,220,224,228,232,236,240,244,248];
echo 'The Numbers is : ';
function filterNums($item){
    if ($item<=250 && $item >= 200){
        echo $item . " , ";
    }
}
array_filter($numbers, 'filterNums');



echo '<br>';
echo '<hr>';
echo '<br>';



$words= array("abcd","abc","de","hjjj","g","wer");
$longWord = "";
for($i=0 ; $i<count($words); $i++){
    if ( strlen($longWord) <= strlen($words[$i]) ){
        $longWord = $words[$i];
    }
};
echo 'The longes value equal : ' . strlen($longWord) . '<br>';
$longWord = "aaaaaaaaaaaaaaa";
for($i=0 ; $i<count($words); $i++){
    if ( strlen($longWord) >= strlen($words[$i]) ){
        $longWord = $words[$i];
    }
};
echo 'The smallest value equal : ' . strlen($longWord) . '<br>';



echo '<br>';
echo '<hr>';
echo '<br>';


for($i=0 ; $i<=10; $i++){
    echo rand(11,20) . " , ";
};



echo '<br>';
echo '<hr>';
echo '<br>';



$myArray = array(110,0,2,3,0,4,5,99,6,7,8,9,0);
$except = array(0);
$value = min(array_diff($myArray, $except));
echo $value;

// array_diff ( array1 , array2 )
/* compare between two arrays and return array1 without values in array2 */
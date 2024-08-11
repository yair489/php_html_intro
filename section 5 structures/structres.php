<?php


$articles = [ "first post", "Another post" , "Read this!"];


echo "<br>";
foreach ($articles as $article){
    echo $article, "        ,   ";
}
//if (condition){ code run if condition is true }

echo "<br>";
if(true){
    echo "condition is true";
}

echo "<br>";
$art_emptey = [];
var_dump(empty($art_emptey));


echo "<br>";
echo "<br>";
if(empty($art_emptey)){
    echo "array is empty";
}else{
    echo "is not empty";
}
echo "<br>";
var_dump(3==4);

echo "<br>";
$age = 21;
if($age == 21){
    echo "is true";
}else{
    echo "false";
}
echo "<br>";

//while
$month =1; 
while($month <= 12){
    echo $month . " , ";
    $month = $month + 1 ;
}
echo "<br>";

//for
for($i =1 ;$i <= 10 ; $i += 1){//++1
    echo $i . " ";
}
echo "<br>";
$day = "Tue";
switch ($day) {
    case "Mon":
        echo "Monday ";
        break;
    case "Tue":
        echo "Tueday ";
        break;
    case "Wed":
        echo "Wedday ";
        break;
    case "Thu":
        echo "Thuday ";
        break;
    case "Fri":
        echo "Friday ";
        break;
    case "Sat":
        echo "Satday ";
        break;
    case "Sun":
        echo "Sunday ";
        break;
    default:
        echo "defult";
    }

















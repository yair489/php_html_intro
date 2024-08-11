<?php


echo "Hello , World!<br>";

$message = "Hello again!";
echo $message."<br>";

$count = 3;
$price = 1.99;

var_dump($message);
echo "<br>";
var_dump($count);
echo "<br>";
var_dump($price);
echo "<br>";
$is_admin = false;
$data = null;

var_dump($is_admin , $data);

echo "<br>";
echo ($count + 5);
echo "<br>";
echo ($count + $price);
echo "<br>";
var_dump($count + 5);
var_dump($count * $price);

echo "<br>";
$name = "yair";
echo $name ." ". $message;

echo "<br>";
$price_string = "150";
$quantity = 3;
var_dump($price_string * $quantity);//change from string to int 

//boolean 
$is_true =true;
$is_false = false;

echo "<br>";
var_dump($is_false);
//and can erite also &&
echo "<br>" ."<br>" . "\$is_false and \$is_true" . "<br>";
var_dump($is_false and $is_true);

//or can write also ||
echo "<br>" ."<br>" ."\$is_false or \$is_true" . "<br>";
var_dump($is_false or $is_true);

echo "<br>" ."<br>" ."\$is_false xor \$is_true" . "<br>";
var_dump($is_false xor $is_true);

echo "<br><br>" ."!\$is_true" ."<br>";
var_dump(!$is_true);


//string

$start = "3 o'clock";
$end = '4 o\'clock';

echo "<br>" . $start , $end;

echo "<br>" . "hello $name";
echo "<br>" . "hello {$name}";

echo "<br>" . $price . $start;











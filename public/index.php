<?php 

// include '../includes/classes/MyFirstClass.php';
// $myVariable = "value";
// $myClassInstance = new MyFirstClass();
// var_dump($myClassInstance);

include '../includes/classes/House.php';

$house1 = new House();
// calling a method allows us to do things with that instances of the class
// and give use access to protected data
$house1->paint('orange');
// cant access protected property, because it is protected
// $house1->color = "red";
$house1->width = "20";
$house1->height = "30";
$house1->length = "40";

$house2 = new House();
$house2->paint('green');
// $house2->color = "blue";
$house2->width = "40";
$house2->height = "50";
$house2->length = "10";

var_dump($house1);
var_dump($house2);


die;
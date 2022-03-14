<?php


echo "HELLO WORLD CSC 226";


//////vardump example
//$testVarDump = "test";
//var_dump($testVarDump);
//////
////
//////Mix Variable in String example
//$txt = "Hello World";
//echo  "I love $txt";
//echo '$txt';
////Mix variable in string example
//
//
////Arithmatic Example
//$x = 5;
//$y = 4;
//echo $x + $y;
//
//
//
//////// global scope example
////$x = 5; // global scope
////myTestGlobalOne();
////myTestGlobalTwo();
////myTestGlobalThree($x);
////myTestLocal();
//
//
////function myTestGlobalOne() {
////    // using x inside this function will generate an error
////    echo "<p>Variable x inside function is: $x</p>";
////}
////
////// not good oop practice
////function myTestGlobalTwo() {
////    global $x;
////    echo "<p>Variable x inside function is: $x</p>";
////}
//////good
//function myTestGlobalThree($x) {
//
//    echo "<p>Variable x inside function is: $x</p>";
//}
////local scope
////function myTestLocal() {
////    $y = 5; // local scope
////    echo "<p>Variable x inside function is: $y</p>";
////}
//
////
//////// using x outside the function will generate an error
////echo "<p>Variable x outside function is: $y</p>";
//
//
//
////echo "<p>Variable x outside function is: $x</p>";
//////
////
//////local scope
//function myTestLocalTwo() {
//    $x = 5; // local scope
//    echo "<p>Variable x inside function is: $x</p>";
//}
//
//
////// using x outside the function will generate an error
////echo "<p>Variable x outside function is: $x</p>";
//////
////
////
//////PHP Data Types
/////*
//// * String
////Integer
////Float (floating point numbers - also called double)
////Boolean
////Array
////Object
////NULL
////Resource
//// */
////
//////String
////
//$emptyString ="";
//$nullString=null;
//var_dump($emptyString);
//var_dump($nullString);
////$intro = "Hello world!";
////$introEnd = 'This is a string!';
////
////echo $intro;
////echo "<br>";
////echo $introEnd;
//////
////
//////Integer
//$intOneExample = 10;
//$intTwoExample = 20;
////
//var_dump($intOneExample);
//echo $intOneExample;
//echo "<br>";
//echo $intTwoExample;
//////
////
////floatOneExample
//$floatOne = 10.365;
//var_dump($floatOne);
////
//////boolean
//$trueVar = boolval(0);
//$falseVar = boolval(1);
////
//var_dump($trueVar);
//var_dump($falseVar);
////
////
//////arrays
//$cars = array("Volvo", "BMW", "Toyota");
////var_dump($cars);
////
//////PHP Object
////class Car {
////    public $color;
////    public $model;
////    public function __construct($color, $model) {
////        $this->color = $color;
////        $this->model = $model;
////    }
////    public function message() {
////        return "My car is a " . $this->color . " " . $this->model . "!";
////    }
////
////}
////////constructor
////$myCar = new Car("black", "Volvo");
//////calling cars functions
////echo $myCar -> message();
////echo "<br>";
////$myCar = new Car("red", "Toyota");
////echo $myCar -> message();
//
//
//class Car {
//    public $color;
//    public $model;
//    public function __construct($color, $model) {
//        $this->color = $color;
//        $this->model = $model;
//    }
//    public function message() {
//        return "My car is a " . $this->color . " " . $this->model . "!";
//    }
//}
////I have a dealership
////Name Of the car Objects car
//$volvo = new Car("black", "awd");
//$mazda = new Car("blue", " qx3");
//$bmw = new Car("yellow", "m1");
//
//
//$cars = array("Volvo"=>$volvo, "Mazda"=>$mazda, "BMW"=>$bmw);
////foreach($cars as $x => $x_value) {
////    echo "Key=" . $x . ", Value=" . $x_value->color;
////    echo "Key=" . $x . ", Value=" . $x_value->model;
////    echo "<br>";
////}
//echo "TEST!!";
//echo $cars['Volvo']->model;
//ARRAYS //O(n) IF YOU LOOP THROUGH
////O(1)-->ACCESS
//
//
//
//$myCar = new Car("black", "Volvo");
////echo $myCar -> message();
////echo "<br>";
////$myCar = new Car("red", "Toyota");
////echo $myCar -> message();
////
//////The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
//////
//////A common example of using the resource data type is a database call.
//////
//////We will not talk about the resource type here, since it is an advanced topic.
////
////
//////conditionals
////$t = date("H");
////
////if ($t < "20") {
////    echo "Have a good day!";
////} else {
////    echo "Have a good night!";
////}
////
//////conditional example two
//$dateEx = date("H");
//
//if ($dateEx === "10") {
//    echo "Have a good morning!";
//} elseif ($dateEx < "20") {
//    echo "Have a good day!";
//}
//
//else {
//    echo "Have a good night!";
//}
//
////switch example
//$favcolor = "";
//switch ($favcolor) {
//    case "red":
//        echo "Your favorite color is red!";
//        break;
//    case "blue":
//        echo "Your favorite color is blue!";
//        break;
//    case "green":
//        echo "Your favorite color is green!";
//        break;
//    default:
//        echo "Your favorite color is neither red, blue, nor green!";
//
//}
//
////while - loops through a block of code as long as the specified condition is true
////do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
////for - loops through a block of code a specified number of times
////foreach - loops through a block of code for each element in an array
//
//$x = 1000;
//
//while ($x <= 5) {
//    echo "The number is: $x <br>";
//    $x++;
//}
//
//do {
//    echo "The number is: $x <br>";
//    $x++;
//} while ($x <= 5);
////
////
//for ($x = 0; $x <= 10; $x++) {
//    echo "The number is: $x <br>";
//}
////
//$colors = array("red", "green", "blue", "yellow");
//$colors[] ="orange";
//array_push($colors,"purple");
//
//foreach ($colors as $value) {
//    echo "$value <br>";
//}
////
////
//////arrays
////
////$colors = array("red", "green", "blue", "yellow");
////
////foreach ($colors as $value) {
////    echo "$value <br>";
////}
////
////
////$cars = array("Volvo", "BMW", "Toyota");
////
////
////for($x = 0; $x < 5; $x++) {
////    $cars[] ='Nissan';
////    echo "<br>";
////}
////
////$arrlength = count($cars);
////
////
//for($x = 0; $x < $arrlength; $x++) {
//    echo $cars[$x];
//    echo "<br>";
//}
////
////
////
////
////
////
//
//$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
////hashing function
////=="Peter" -->arrayKey Peter "2sfdsffs"
////O(1); 1computing step
////O(n)//1000 1000
//
//
//
////array
////or
//$age['Peter'] = "35";
//$age['Ben'] = "37";
//$age['Joe'] = "43";
////
////
////
////assocative array /hashmap hashtable?
//$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
//echo "Peter is " . $age['Peter'] . " years old.";
////
//foreach($age as $x => $x_value) {
//    echo "Key=" . $x . ", Value=" . $x_value;
//    echo "<br>";
//}
////HashTables are basically An Array and HashingFunction
////Hashing function converts they key you store in the array into an index
//"Peter"--> 2,4,5,63,3
//$age["Peter"]=35
//
////
//////multidimensional arrays
////$cars = array (
////    array("Volvo",22,18),
////    array("BMW",15,13),
////    array("Saab",5,2),
////    array("Land Rover",17,15)
////);
////
////echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
////echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
////echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
////echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
////
////
//////echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
//////echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
//////echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
//////echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
////
////
//?>
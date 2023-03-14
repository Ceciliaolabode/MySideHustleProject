<?php
     // ECHO FUNCTION
    // echo "<b>Hello World<b>"; 

    // COMMENT
    //echo "<b>Hello World<b>"; comment
    #echo "<b>Hello World<b>"; comment
    /*echo "<b>Hello World<b>";*/  //multi

    // VARIABLES
    // $msg ="<b>Hello World!<b>"; 
    // $msg ="<b>Hello Nigeria!<b>";
    // echo $msg;

    // CONSTANTS
    // define("MESSAGE", "Hi Side Hustlers");
    // // define("MESSAGE", "Hi World"); // error
    // echo MESSAGE;

    // DATATYPES AND OPERATORS
    // Strings
    // $String1 = "Hello,";
    // $String2 = "Welcome to my world.";
    // echo $String1. ' ' .$String2;

    // Integer
    // $a = 23;
    // $b = -25;
    // echo $a;
    
    // Float 
    // Boolean

    // Operators:
    // // Arithmetic:(+, -, /, * , % etc)
    // $num = 45;
    // $num2 = 12;
    // echo $num + $num2;

    // // Assignment
    // $num1 = 27;
    // $num2 = 10;
    // $num1 += $num2; // $num1 + $num2  = $num1
    // echo $num1;

    // // Side Hustle Assignment ( Week 1)
    // $name = "Cecilia Olabode"; // declaring my name as a variable
    // echo $name; // echoing my variable i.e my name

    // WEEK 2
    // Arrays in PHP
    // Types of Arrays: Numeric Arrays, Associative Arrays, Multi-dimensional Arrays.
    // $names = array("David", "Amy", "John");
    // echo $names[0];
    // or
    // $names[0] = "David";
    // $names[1] = "Amy";
    // $names[2] = "John";

    // // Associative Arrays : they use named keys that you assign to them.
    // $ages = array("David" => "27", "Amy" => "21", "John" => "42");
    // echo $ages["David"];
    // // or
    // // $age["David"] = "27";
    // // $age["Amy"] = "21";
    // // $age["John"] = "42";

    // // Multi dimensional Array: Contains one or more arrays. Can either be associative or numeric array.
    // $users = array(
    //     "online" => array("David", "Kate", "Brian"),
    //     "offline" => array("King", "Michael"),
    //     "away" => array("Mary", "Henry")
    // );
    // echo $users["online"][0]; //David

    // Control Structures of PHP // Joseph Emeruwa
    // if else, if elseif else, switch, while, do while, for , foreach.
    // $user = "Dotun";
    // if ($user == "Dotun"){
    //     echo "true"; //truer
    // } else{
    //     echo "false";
    // }

    // $x = 20;
    // $y = 50;
    // if ( $x >= $y){
    //     echo "true";
    // } else {
    //     echo "false"; // false because x != y
    // }

// if elseif else statement
// $age = 21;
//  if( $age <= 13){
//    echo "child";
//  } elseif ($age > 13 && $age <  19) {
//     echo "teen";
//  } else {
//     echo "adult";
//  } 

// Switch statement : is an alternative to the if elseif if statement.
// use "break" to prevent the code from running into the next case automatically.
// default : case to be run if no match is found.
// $today = "Tue";
// switch ($today) {
//     case "Mon":
//         echo "Today is Monday";
//         break; // without a break statement, the values are clustered together.
//     case "Tue":
//         echo "Today is Tuesday";
//         break;
//     case "Wed":
//         echo "Today is Wednesday";
//         break;
//     case "Thur":
//         echo "Today is Thursday";
//         break;
//     case "Fri":
//         echo "Today is Friday";
//         break;
//     default: //fallback statement if everything does not work.
//         echo "It's the weekend.";
// }

// //  While Loop
// // executes a block of code as long as the specified condition is true
// // if the condition never becomes false, the code continues to be executed indefinitely
// $i = 1;
// while ($i < 7) {
//     echo "The value is $i <br>";
//     $i++;
// }

// // Do while Loop
// // it executes once even if it is true or false. Then repeats if it is true.
// $i = 5;
// do {
//     echo "The number is $i <br> ";
//     $i++;
// } while ($i <= 7);

// // For Loop
// // Used when you know in advance how many times the script should run
// for ($a=0; $a < 6 ; $a++) { 
//     echo "Value of a : $a <br>";
// }

// // For Each Loop
// // Works only on arrays, and is used to loop through each key/value pair in an array.
// $names = array ("John", "David", "Amy");
// foreach ($names as $name) {
//    echo $name, '<br>';
// }

// Assignment
// Write a validation logic for a simple voting system.
$voterAge = "18";
$voterPVC = "has PVC";
$voterWard = "020";
    if ($voterAge <= "18") {
        echo "Voter eligible to vote: Voter's age is above 18years. <br>"; 
    } else{
        echo "Voter isn't eligible to vote: Voter's age is below 18years. <br>";
    }
    if ($voterPVC == "has PVC") {
        echo "Voter eligible to vote: Voter has PVC. <br>"; 
    } else{
        echo "Voter isnt eligible to vote: Voter has no PVC. <br>";
    }
    if ($voterWard == "020") {
        echo "Voter eligible to vote: Voter's ward is 020. <br>"; 
    } else{
        echo "Voter isnt eligible to vote : Voter's ward isn't 020. <br>";
    }


?>
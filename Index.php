<?php

//Broken code given on challenge

name = "  Bob  ";

age = "thirty five";

$job = plumber;

$carMake = " Toyota";

$carColour = "RED";

$happy = true

$time = "this many";

// Correct code to the challenge

$name = "  Bob  ";          // Corrected added a $
    echo $name;

    echo trim($name);       // Added trim to remove space around Bob

$agewas = "thirty five";    // Corrected added a $

$age = "35"                 // Change age from letters to numbers
    echo $age;
z
$job = "plumber";           // Corrected added a " "
    echo $job;

$carMake = " Toyota";

$carColour = "RED";
    echo strtolower ($carColour)             // Capital letters to lower case

$car = $carMake . $carColour;                // Combines car make and car colour

$happy = "true";            // Corrected added a " " and ;
    echo $happy;

$time = "this many";
    echo strlen ($time);    // This gives us the number of characters in $time.
               // This will be the new $time


//The final story
$name = "  Bob  ";
 echo trim($name);
 echo "is a";

 $job = "plumber.";
    echo $job;
 
    echo "He drives a"

$carMake = " Toyota";
$carColour = "RED";

$car = $carMake . $carColour;
    echo $car;
    echo "and works"
    
$time = "9";
    echo "hours a day. He is"

$age = "35"
    echo $age;
    echo "years old and is"
 
{65-age}
    echo "years from retirement. He is"

$happy = "true";
if ($happy== 'true'){
    echo "true";
}   else{
    echo "false"
}

    echo "with his life."
?>
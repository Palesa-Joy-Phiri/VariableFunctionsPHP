<?php

//Broken code given on challenge

/*name = "  Bob  ";

age = "thirty five";

$job = plumber;

$carMake = " Toyota";

$carColour = "RED";

$happy = true

$time = "this many";
*/

// Correct code to the challenge

$name = "  Bob  ";          // Corrected added a $
    echo trim($name);       // Added trim to remove space around Bob

$age = "thirty five"."<br>";    // Corrected added a $

$agenew = ("thirty five"."35". $age);                // Change age from letters to numbers
    echo $agenew."<br>";

$job = "plumber";           // Corrected added a " "
    echo $job."<br>";

$carMake = " Toyota";
    echo $carMake."<br>";

$carColour = "RED";
    echo strtolower ($carColour)."<br>";            // Capital letters to lower case

$car = $carMake . $carColour;                // Combines car make and car colour
    echo $car."<br>";

$happy = "true";            // Corrected added a " " and ;
    echo $happy."<br>";

$time = "this many";
    echo strlen ($time)."<br>"."<br>";    // This gives us the number of characters in $time.
               // This will be the new $time 


//The final story
$name = "  Bob  ";
 echo trim($name);
 echo "is a";

 $job = "plumber";
    echo $job;
 
    echo "He drives a";

$carMake = " Toyota";
$carColour = "RED";

$car = $carMake . strtolower ($carColour);
    echo $car;
    echo "and works";
    
$time = 9;
    echo "hours a day. He is";

$age = 35;
    echo $age;
    echo "years old and is";
 
$retirement = 65-35;
    echo $retirement;
    echo "years from retirement. He is";

$happy = "true";
if ($happy == 'true')
{   echo "true";
}

    echo "with his life.";
?>
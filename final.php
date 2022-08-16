<?php

echo "Final Variable Functions Challenge:"."<br>"."<br>";

//The different variables
$name = "  Bob  ";
 echo trim($name)."<br>";

 $job = "plumber";
    echo $job."<br>";

$carMake = " Toyota";
    echo $carMake."<br>";

$carColour = "RED";
    echo $carColour."<br>";

$car = $carMake . strtolower ($carColour);
    echo $car."<br>";
    
$time = 9;
    echo $time."<br>";

$age = 35;
    echo $age."<br>";
 
$retirement = 65-35;
    echo $retirement."<br>";

$happy = "true";
if ($happy == 'true')
{   echo "true"."<br>"."<br>";
}

//The final story

echo "Final Story:"."<br>";
echo " $name is a $job. He drives a $car and works $time hours a day. He is $age years old and is $retirement years from retirement. He is $happy with his life."

?>
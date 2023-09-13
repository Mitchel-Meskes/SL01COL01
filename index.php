<?php

// Developer: Mitchel Meskes

/**
 * Define variables,
 * String, 'Hallo World'
 * Boolean, 'true/false'
 * Intager, '1 t/m 10'
 * Float, '1.10'
 * array, '['hans', 'jan']'
 * date, '08/09/2002'
 */

// variable

/**
 * A variable is the name of the memory location that holds data.
 */

$name = 'Mitchel';

echo 'My name is: '. $name;

//boolean

/**
 * Boolean is a data type that has one of two possible values True or False.
 */

$isMarried = False;

echo '<br>Is '. $name . ' Status married: ' . $isMarried;

//Intager

/**
 * An integer data type is a non-decimal number.
 */

$age = 20;

echo '<br>My age currently is: ' . $age;

//float - pi oppervlakte cirkel

/**
 * A float is a number with a decimal point.
 */

$pi = 3.14;

$cirkeldiameter = 10;

$oppvervaklte = $pi * $cirkeldiameter;

echo '<br> Oppervlakte van de cirkel: ' . $oppvervaklte;

//array

/**
 * An array is a data structure that allows you to store multiple data type under a single variable.
 */

$proLanguages = [
    'html',
    'css',
    'php',
    'javascript',
];

echo '<br> I have coding experience with these languages: ';

foreach ($proLanguages as $Languages) {
    echo  '<br>' . $Languages;
}


//date

/**
 * Date is used to format a date or time into a readable format.
 */

$date = date("d-m-Y");
$time = date('H:i:s');

echo '<br> The current date: ' . $date .  '<br> The current time: ' . $time;

?>


<?php 

// The currentTime veriable gets the current time by the region that is selected.
$currentTime = date_default_timezone_set('Europe/Amsterdam');

// Used to check if the time is higher or lower orequel to 12.
$pmOrAm = 12;

// Used to set the background color based on time.
if ($pmOrAm <= $currentTime){
    $backgroundColor = 'gray';
}else {
    $backgroundColor = 'white';
}
?>
<body>
    <style>
        body{
        background-color: <?php print_r($backgroundColor)?>;
        }
    </style>
</body>

<?php

declare(strict_types=1);

/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once '/excercise-1/Beverage.php';
require_once '../exercise-1/Beverage.php';

//require_once '/OOP-introduction/excercise-1/index.php';

//require_once '../excercise-1/Beverage.php';

class Beer extends Beverage {
    public string $name;
    public float $alcoholPercentage;

    // Corrected constructor
    public function __construct(string $name, float $alcoholPercentage, string $color, float $price) {
        parent::__construct($color, $price, "cold");
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    // function
    public function getAlcoholPercentage(): string {
        return "$this->name contains $this->alcoholPercentage% alcohol.";
    }
}

// Instantiate a beer object representing Duvel
$Duvel = new Beer("Duvel", 8.5, "blond", 3.5);

// Using different methods to display information
echo $Duvel->getInfo() . "\n";
echo $Duvel->getAlcoholPercentage() . "\n";
echo "Color: " . $Duvel->color . "\n";



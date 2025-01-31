<?php




class Vehicle {


    public $make;
    public $model;




    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }




    public function displayInfo() {
        echo "Make: " . htmlspecialchars($this->make) . "<br>";
        echo "Model: " . htmlspecialchars($this->model) . "<br>";
    }
}


class Car extends Vehicle {
 
    public $fuelType;


    public function __construct($make, $model, $fuelType) {


        parent::__construct($make, $model);
        $this->fuelType = $fuelType;
    }




    public function displayInfo() {
        parent::displayInfo();
        echo "Fuel Type: " . htmlspecialchars($this->fuelType) . "<br>";
    }
}


$myCar = new Car("Toyota", "Glanza", "Patrol");
echo "<h2>Car Details:</h2>";
$myCar->displayInfo();


?>

<?php


class Employee {


    public $name;
    public $designation;
    public $salary;




    public function __construct($name, $designation, $salary) {
        $this->name = $name;
        $this->designation = $designation;
        $this->salary = $salary;
    }




    public function displayDetails() {
        echo "<h3>Employee Details:</h3>";
        echo "Name: " . htmlspecialchars($this->name) . "<br>";
        echo "Designation: " . htmlspecialchars($this->designation) . "<br>";
        echo "Salary: $" . number_format($this->salary, 2) . "<br><br>";
    }
}


$employee1 = new Employee("Alice Johnson", "Software Engineer", 75000);
$employee2 = new Employee("Bob Smith", "Project Manager", 85000);
$employee3 = new Employee("Charlie Brown", "UX Designer", 65000);
$employee1->displayDetails();
$employee2->displayDetails();
$employee3->displayDetails();


?>

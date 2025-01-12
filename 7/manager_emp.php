<?php
class Employee {
    protected $name;
    protected $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getDetails() {
        return "Name: " . $this->name . "<br>Salary: ₹" . $this->salary;
    }
}

class Manager extends Employee {
    private $department;

    public function __construct($name, $salary, $department) {
        parent::__construct($name, $salary);
        $this->department = $department;
    }

    public function getManagerDetails() {
        return $this->getDetails() . "<br>Department: " . $this->department;
    }
}

$manager = new Manager("aman patel", 37000, "sales");
echo $manager->getManagerDetails();
?>


<?php
class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }
}

class Manager extends Employee {
    private $department;

    public function __construct($name, $salary, $department) {
        parent::__construct($name, $salary);
        $this->department = $department;
    }

    public function getDepartment() {
        return $this->department;
    }

    public function display_info () {
        echo "Manager: " . $this->getName() . " || salary: " . $this->getSalary() . " || department: " . $this->getDepartment();
    }

    
}

class Developer extends Employee {
    private $Language;

    public function __construct($name, $salary, $Language) {
        parent::__construct($name, $salary);
        $this->Language = $Language;
    }

    public function getLanguage() {
       return $this->Language;
   }

   public function display_info () {
    echo "developer: " . $this->getName() . " || salary: " . $this->getSalary() . " || language: " . $this->getLanguage();
}
 }


$manager = new Manager("Alice", 80000, "Sales");
$developer = new Developer("Bob", 60000, "PHP");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10px;
            background: pink;
        }
        .employee {

            margin: 5px 0;
        }
      
    </style>
    
</head>
<body>
    <div class="employee">
        <p><?php $manager->display_info()?></p>

    <p><?php $developer->display_info()?></p>
    </div>
</body>
</html>

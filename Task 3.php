<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php

        class Employee {
            private $name;
            private $salary;

            public function __construct($name, $salary) {
                $this->name = $name;
                $this->setSalary($salary);
            }

            public function getName() {
                return $this->name;
            }

            public function getSalary() {
                return $this->salary;
            }

            public function setSalary($salary) {
                if ($salary > 0) {
                    $this->salary = $salary;
                } else {
                    echo "Salary must be greater than 0.";
                }
            }
        }
        $employee = new Employee('Shykat Emam', 20000);

        echo "Employee name: " . $employee->getName() . "<br>";
        echo "Salary: $" . $employee->getSalary();

    ?>




</body>
</html>
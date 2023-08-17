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

        class Shape {
            protected $name;

            public function __construct($name) {
                $this->name = $name;
            }

            public function getName() {
                return $this->name;
            }

            public function calculateArea() {
                // default
                return 0;
            }
        }
        class Circle extends Shape {
            private $radius;

            public function __construct($name, $radius) {
                parent::__construct($name);
                $this->radius = $radius;
            }

            public function calculateArea() {
                //pi*r(square)
                return pi() * $this->radius * $this->radius;
            }
        }

        class Rectangle extends Shape {
            private $width;
            private $height;

            public function __construct($name, $width, $height) {
                parent::__construct($name);
                $this->width = $width;
                $this->height = $height;
            }

            public function calculateArea() {
                return $this->width * $this->height;
            }
        }
        $circle = new Circle('Circle', 5);
        $rectangle = new Rectangle('Rectangle', 4, 6);

        echo $circle->getName() . " Area: " . $circle->calculateArea() . "<br>";
        echo $rectangle->getName() . " Area: " . $rectangle->calculateArea();








    ?>

</body>
</html>
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

        class Animal {
            public $name;
            public function __construct($name) {
                $this->name = $name;
            }
            public function makeSound() {
                return "Unknown animal sound";
            }
        }
        class Dog extends Animal {
            public function makeSound() {
                return "bark! bark!";
            }
        }
        class Cat extends Animal {
            public function makeSound() {
                return "mew! meo! Meow!";
            }
        }
        class Cow extends Animal {
            public function makeSound() {
                return "hamba! hamba!";
            }
        }
        $dog = new Dog('Puppy');
        $cat = new Cat('Minu');
        $cow = new Cow('Lalu');
        $cat2 = new Cat('Piu');
        $cow2 = new Cow('Lali');

        $animals = [$dog, $cat, $cow, $cat2, $cow2];

        foreach ($animals as $animal) {
            echo "<br>";
            echo $animal->name . ": " . $animal->makeSound() . "<br>";
        }





    ?>


</body>
</html>
<?php

    $letter = 'a'; // string

    $letter = '123'; // int/ number

    $letters = 123.123; // float

    $letters = ['a', 'b', "c"]; // array $letters[0] = 'a' ], $letters[1] = 'b'

    echo $letters[2]; // c


class Vehicle {
    private $wheels;
    public $velocity;
    public $passengers;
    private $name;

    public function setWheels($wheels) {
        $this->wheels = $wheels;
    }

    public function setVelocity($velocity) {
        $velocity = $velocity . 'km';

        $this->velocity = $velocity;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getPassengers() {

        $text = implode(',', $this->passengers);

        return $text . 'siedza w ' . $this->getName() . '.';
    }
}

class Bike extends Vehicle {
    public function __construct()
    {
        $this->setWheels(2);
        $this->setVelocity(25);
        $this->setName('Romet');

        $this->passengers = ['Wiktor'];
    }
}

class Car extends Vehicle {
    public function __construct()
    {
        $this->passengers = ['Wiktor', 'Monika', 'Pawel'];
        $this->setWheels(4);
        $this->setName('Vauxhall');

        echo $this->getPassengers(); // Wiktor,Monika,Pawel siedza w Vauxhall
    }
}

$car = new Car();


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <link rel="stylesheet" href="assets/css/main.css" />

        <title>Kaktusy</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Kaktusy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pictures.html">Pictures</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="container">
            <h1 class="centered-header">Hello world</h1>
            <h1>Hello world</h1>
            <h1 class="right-aligned"></h1>
            <p class="right-aligned">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum enim et elementum tristique. Pellentesque tempus purus id condimentum volutpat. Sed sed odio ac erat malesuada fringilla. Nulla sed vestibulum eros. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque ultricies, odio vitae scelerisque elementum, tellus augue imperdiet nisi, in pellentesque nibh nisi eu felis. Donec gravida nec nisl venenatis posuere.
            </p>

            <p class="centered-header">Some terxt</p>
        </div>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
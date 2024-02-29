<?php

// inheritance

class Vehicle{
    private $name;
    private $color;

    function __construct( $name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function greet(){
        return "Hello, I am a " . $this->color . " " . $this->name;
    }
}
    class  car extends Vehicle{
    }

    $car = new Car("Mobil A", "Hitam");
    echo $car->greet();
?>
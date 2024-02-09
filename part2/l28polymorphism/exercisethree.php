<?php

abstract class vehicle{
    abstract public function start();
    abstract public function stop();

}

class car extends vehicle{

    public function start(){
        return "Car Started . <br/>";
    }

    public function stop(){
        return "Car Stopped . <br/>";
    }

}

class bike extends vehicle{

    public function start(){
        return "Bike Started . <br/>";
    }

    public function stop(){
        return "Bike Stopped . <br/>";
    }

}


echo "This is Polymorphism Concept <br/>";

$obj1 = new car();
$obj1->start();
$obj1->stop();

$obj2 = new bike();
$car->start();
$obj2->stop();

echo "<hr/>";

?>
<?php

class hola1{

    public $name = "Ko Ko";

    public function friend(){
        return "My best friend name is " . $this->name . "<br/>";
    }

    public function getfriend(){
        echo $this->friend();
    }

}

class hola2 extends hola1{
    public function friend(){
        return "My best friend name is " . $this->name . " and Su Su <br/>";
    }
}


echo "This is Data binding" ."<br/>";

$obj1 = new hola1();
echo $obj1->friend(); //My best friend name is Ko Ko
$obj1->getfriend(); //My best friend name is Ko Ko

$obj2 = new hola2();
echo $obj2->friend(); //My best friend name is Ko Ko and Su Su
$obj2->getfriend(); //My best friend name is Ko Ko and Su Su


echo "<hr/>";





class hola3{

    public static $name = "Ko Ko";

    public static function friend(){
        return "My best friend name is " . self::$name . "<br/>";
    }

    public static function getfriend(){
        echo self::friend(); // အပေါ်ကအတိုင်းပဲယူသွားစေချင်ရင်သုံး
        // echo static::friend(); // data update အတိုင်းယူသွားစေချင်ရင်သုံး
    }

}

class hola4 extends hola3{
    public static function friend(){
        return "My best friends name are " . self::$name . " and Su Su <br/>";
    }

    // public static function getfriend(){
    //     echo self::friend();
    // }
}


echo "This is Early binding" ."<br/>";

$obj3 = new hola3();
echo $obj3::friend(); //My best friend name is Ko Ko
$obj3::getfriend(); //My best friend name is Ko Ko

$obj4 = new hola4();
echo $obj4::friend(); //My best friends name are Ko Ko and Su Su
$obj4::getfriend(); //My best friends name are Ko Ko and Su Su


echo "<hr/>";

?>
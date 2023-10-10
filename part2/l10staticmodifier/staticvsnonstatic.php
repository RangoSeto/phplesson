<?php

class staticvsnonstatic{

    // Member Variables
    // Non-Static properties
    public $fullname = "Honey Nway Oo";


    // Static properties 
    public static $city = "Mandalay";

    //Constant properties
    const GENDER = "Female";


    // Member Method
    // Non-Static Method
    // (Non-static method = can call static properties & non-static properties)
    // (Non-static method = can call static method & non-static method)
    public function getname(){
        echo "I am Non-Static Method. <br/>";

        echo "Name is $this->fullname <br/>";
    }

    public function getcity(){
        echo "I am Non-Static Method. <br/>";

        echo "City is ". self::$city ."& Hometown is". static::$city ."<br/>";
    }

    public function getgender(){
        echo "I am Non-Static Method. <br/>";

        echo "Gender is " . self::GENDER ." <br/>";
    }

    public function car(){
        echo "I am Non-Static Method. <br/>";
        
        $brand = static::carbrand();
        echo "I bought a new ${brand} car. <br/>";
    }

    public function mobilebrand(){
        return "iPhone 14 Pro Max";
    }

    public function beforebuy(){
        echo "I am Non-Static Method. <br/>";
        
        $brand = $this->mobilebrand();
        echo "I am thinking about to by a new ${brand}. <br/>";
    }


    // Static Method 
    // (Static Method can not use non-static property)
    // (Static Method can not use non-static method)
    public static function getstaticcity(){
        echo "I am Static method. <br/>";

        echo "City is ". self::$city ."& Hometown is". static::$city ."<br/>";
    }

    public static function getstaticgender(){
        echo "I am Non-Static Method. <br/>";

        echo "Gender is " . self::GENDER ." <br/>";
    }

    public static function carbrand(){
        return "Toyota LEXUS Lx570";
    }

    // Error = Can't set cuz Static method can't call Non-static method 
    // public static function mobile(){
    //     echo "I am static method. <br/>";

    //     $brand = $this->mobilebrand();
    //     echo "I bought a new ${brand} <br/>";
    // }

    public static function afterbuy(){
        echo "I am static method. <br/>";

        $brand = self::carbrand();
        echo "I lovely my new ${brand} car. <br/>";
    }


}


echo "This is Static Vs Non-static " . "<br/>";

$obj = new staticvsnonstatic();

// Calling Non-static Properties 
echo $obj->fullname; //Honey Nway Oo
echo "<br/>";

// Calling static Properties 
echo $obj::$city; // Mandalay
echo "<br/>";

// Calling Static Properties 
echo $obj::GENDER; // Female
echo "<br/>";

echo "<hr/>";


// Calling Non-Static Method 
$obj->getname(); // Name is Honey Nway Oo
$obj->getcity(); // City is Mandalay& Hometown isMandalay
$obj->getgender(); // Gender is Female


// Calling Static Method 
$obj::getstaticcity(); // City is Mandalay& Hometown isMandalay
$obj::getstaticgender(); // Gender is Female

staticvsnonstatic::getstaticcity(); // City is Mandalay& Hometown isMandalay
staticvsnonstatic::getstaticgender(); // Gender is Female

echo "<hr/>";

$obj->car(); // I bought a new Toyota LEXUS Lx570 car.

echo "<hr/>";

// $obj::mobile(); //error

echo "<hr/>";

$obj->beforebuy(); // I am thinking about to by a new iPhone 14 Pro Max.

echo "<hr/>";

$obj->afterbuy(); // I lovely my new Toyota LEXUS Lx570 car.

echo "<hr/>";

// 25ST

?>
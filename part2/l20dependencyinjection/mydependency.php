<?php

class course{
    public $courseidx;

    public function __construct($val){
        $this->courseidx = $val;
    }

    public function getcourseidx(){
        echo "Course Index is = " . $this->courseidx . "<br/>";
    }
}

class lesson extends course{
    public $lessonnumber;

    public function __construct($val){
        $this->lessonnumber = $val;
    }

    public function getlessonnumber(){
        echo "Lesson Number is = " . $this->lessonnumber . "<br/>";
    }
}


echo "This is Dependency Injection <br/>";

$getcourse = new course(1);
$getcourse->getcourseidx(); // Course Index is = 1

$getlesson = new lesson(10);
$getlesson->getlessonnumber(); // Course Index is = 10

$getlesson->getcourseidx(); //Course Index is = (childကနေparentဟာကိုခေါ်လို့ရပေမယ့် dataပါပါမလာဘူးဖြစ်နေတယ်)
// $getcourse->getlessonnumber(); //error

echo "<hr/>";


// => Parent to Child 

class vehicle{
    public $modelnumber;
    public $evcarobj;
    public $carmodeobj;

    public function __construct($val,$price,$type){
        $this->modelnumber = $val;
        $this->evcarobj = new evcar($price);
        $this->carmodeobj = new carmode($type);
    }

    public function getmodelnumber(){
        echo "Vehicle Model Number is = " . $this->modelnumber . "<br/>";
    }
}

class evcar extends vehicle{
    public $price;

    public function __construct($val){
        $this->price = $val;
    }

    public function getprice(){
        echo "EV car price is = " . $this->price . "<br/>";
    }
}

class carmode extends vehicle{
    public $type;

    public function __construct($val){
        $this->type = $val;
    }

    public function gettype(){
        echo "Car Type is = " . $this->type . "<br/>";
    }
}


$getvehicle = new vehicle("11111",2000,"lexury");
$getvehicle->getmodelnumber(); // Vehicle Model Number is = 11111

$getevcar = new evcar(10000);
$getevcar->getprice(); // EV car price is = 10000

$getvehicle->evcarobj->getprice(); // EV car price is = 2000 (parကနေchildဟာကိုလှည့်ပီးခေါ်လိုက်ုတာ)
$getvehicle->carmodeobj->gettype(); // 


echo "<hr/>";



// => Child to Parent

class phone{
    public $brand;

    public function __construct($val){
        $this->brand = $val;
    }

    public function getbrand(){
        // echo "Phone brand is = " . $this->brand . "<br/>"; // passing by properties
        return "Phone brand is = " . $this->brand . "<br/>"; // passing by method (value assign lot mar ma lo)
    }
}

class phonemodel extends phone{
    public $price;

    public function __construct($val,phone $phone){
        $this->price = $val;
        // $this->brand = $phone->brand; // passing by properties
        $this->brand = $phone->getbrand(); // passing by member method
    }

    public function getprice(){
        echo "Price is = " . $this->price . "<br/>";
    }
}

$getphone = new phone("iPhone");
$getphone->getbrand(); // Phone brand is = iPhone

$getphonemodel = new phonemodel(500,$getphone);
$getphonemodel->getprice(); // Price is = 500

//passing by properties
// echo $getphonemodel->brand; // iPhone
// $getphonemodel->getbrand(); // Phone brand is = iPhone

// passsing by member method 
$getphonemodel->brand; // Phone brand is = iPhone


echo "<hr/>";



?>

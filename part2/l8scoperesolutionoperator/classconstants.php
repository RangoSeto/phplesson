<?php

class classconstants{

    // Member variables or properties
   
    const NAME = "Mya Hnin Yee Lwin";
    public const CITY = "Yangon";
    protected const EMAIL = "mamamya@gmail.com";
    private const PASSWORD = "12345678";

    // Member functions (main classရဲ့memberတွေ)
    public function getinfo(){
        echo "Name is ".self::NAME." & She live in ".self::CITY."<br/>";
    }

    public function getaccess(){
        echo "Email is ".self::EMAIL." & Password is ".self::PASSWORD."<br/>";
    }


}


class baby1 extends classconstants{

}

class baby2 extends classconstants{

    public function getcontent(){
        echo "Name is ".self::NAME." & She live in ".self::CITY."<br/>";
    }

    public function getemail(){
        echo "Email is ".self::EMAIL."<br/>";
    }

    // this method is useless cuz password was private 
    // public function getpassword(){
    //     echo "Passwword is ".self::PASSWORD."<br/>";
    // }

}


echo "This is Class Constants . <br/>";

$obj = new classconstants();
echo $obj::NAME; //Mya Hnin Yee Lwin
echo "<br/>";
echo classconstants::CITY; //Yangon

// echo $obj::EMAIL; //error cuz it is protected
// echo $obj::PASSWORD; //error cuz it is private

echo "<br/>";

$obj->getinfo(); //Name is Mya Hnin Yee Lwin & She live in Yangon
$obj->getaccess(); //Email is mamamya@gmail.com & Password is 12345678

echo "<hr/>";




echo "This is Class Constants Baby 1 . <br/>";

$bb1 = new baby1();
echo $bb1::NAME; //Mya Hnin Yee Lwin
echo "<br/>";
echo baby1::CITY; //Yangon

// echo $bb1::EMAIL; //error cuz it is protected
// echo $bb1::PASSWORD; //error cuz it is private

echo "<br/>";

$bb1->getinfo(); //Name is Mya Hnin Yee Lwin & She live in Yangon
$bb1->getaccess(); //Email is mamamya@gmail.com & Password is 12345678 // methodကနေသွယ်ဝိုက်ခေါ်တာမလို့ email,pass ကပေါ်နေတာ

echo "<hr/>";





echo "This is Class Constants Baby 2 . <br/>";

$bb2 = new baby2();
echo $bb2::NAME; //Mya Hnin Yee Lwin
echo "<br/>";
echo baby2::CITY; //Yangon

// echo $bb2::EMAIL; //error cuz it is protected
// echo $bb2::PASSWORD; //error cuz it is private

echo "<br/>";

$bb2->getinfo(); //Name is Mya Hnin Yee Lwin & She live in Yangon
$bb2->getaccess(); //Email is mamamya@gmail.com & Password is 12345678 // methodကနေသွယ်ဝိုက်ခေါ်တာမလို့ email,pass ကပေါ်နေတာ

$bb2->getcontent(); //Name is Mya Hnin Yee Lwin & She live in Yangon
$bb2->getemail(); //Email is mamamya@gmail.com
// $bb2->getpassword(); // error cuz password is private

echo "<hr/>";





?>
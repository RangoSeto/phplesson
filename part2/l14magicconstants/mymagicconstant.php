<?php

class mymagicconstant{

    public function getclassname1(){
        echo __CLASS__ . "<br/>";
    }

    public function getclassname2(){
        echo get_class($this) . "<br/>"; // magic constantမဟုတ်ဘူး ဒါပေမယ့် classကိုခေါ်တာပဲ
    }

    public function getfunname1(){
        echo __FUNCTION__ . "<br/>";
    }

    public static function getfunname2(){
        echo __FUNCTION__ . "<br/>";
    }


    public function getmthname1(){
        echo __METHOD__ . "<br/>";
    }

    public static function getmthname2(){
        echo __METHOD__ . "<br/>";
    }


    public function getdir(){
        echo __DIR__ . "<br/>"; // *** အသုံးများ
    }

    public function getfile(){
        echo __FILE__ . "<br/>"; // *** အသုံးများ
    }

    public function getline(){
        echo __LINE__ . "<br/>"; // သူထုတ်လိုက်တဲ့ဟာရဲ့ line no ပြမှာ 40
    }

}


trait access{
    
    public $email = "honey@gmail.com";
    public $password = "123456";

    public function gettrait(){
        echo __TRAIT__ . "<br/>"; // __TRAIT__  must be in parent.
    }

}

class auth{
    use access;

    public function login(){
        echo "This is user login. Email is $this->email & Password is $this->password . <br/>";
    }
}



echo "This is Magic Constants <br/>";

$obj = new mymagicconstant();
$obj->getclassname1(); // mymagicconstant
$obj->getclassname2(); // mymagicconstant

$obj->getfunname1(); // getfunname1
$obj->getfunname2(); // getfunname2

$obj->getmthname1(); // mymagicconstant::getmthname1
$obj->getmthname2(); // mymagicconstant::getmthname2


$obj->getdir(); // C:\xampp\htdocs\phpbatch3\part2\l14magicconstants (working directory - folder path)
$obj->getfile(); //C:\xampp\htdocs\phpbatch3\part2\l14magicconstants\mymagicconstant.php (working directory - file path)

$obj->getline(); // 40

echo "<hr/>";


$obj2  = new auth();
$obj2->login(); //This is user login. Email is honey@gmail.com & Password is 123456 .
$obj2->gettrait(); // access 

?>


<?php

// iterate ဆိုတာ looping သဘောမျိုးပဲ အဲ့ class ထဲကproperties တွေကိုပဲ associate arrအနေနဲ့ထုတ်ပေးတာ
class myiterate{

    public $article;
    public $comment = true;

    public function __construct($val){
        $this->article = $val;
    }

    function greeting(){
        echo "Hello World";
    }

}

echo "This is Iterating Object <br/>";

$objs = new myiterate("This is new articles");

foreach($objs as $key => $obj){
    echo $key . " = " . $obj . "<br/>"; //article = This is new articles , comment = 1
}


var_dump($objs); //object(myiterate)#1 (2) { ["article"]=> string(20) "This is new articles" ["comment"]=> bool(true) }

echo "<hr/>";



?>

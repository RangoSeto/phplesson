<?php

class mymagic{

    public $num;
    private $name;
    protected $age;

    public function __construct($val){
        
        // property_exists() က public,private,protected သုံးမျိုးလုံးနဲ့လာစစ်လို့အဆင်ပြေတယ်
        // property_exists(classname string,propertyname string)

        // if(property_exists('mymagic','num')){
        //     echo $this->num = $val;
        // }else{
        //     echo "Property doesn't exist";
        // }

        // if(property_exists($this,'num')){
        //     echo $this->num = $val;
        // }else{
        //     echo "Property doesn't exist";
        // }

        // if(property_exists('mymagic','name')){
        //     echo $this->name = $val;
        // }else{
        //     echo "Property doesn't exist";
        // }

        // if(property_exists($this,'name')){
        //     echo $this->name = $val;
        // }else{
        //     echo "Property doesn't exist";
        // }

        // if(property_exists('mymagic','age')){
        //     echo $this->age = $val;
        // }else{
        //     echo "Property doesn't exist";
        // }

        if(property_exists($this,'age')){
            echo $this->age = $val;
        }else{
            echo "Property doesn't exist";
        }

    }

}

class mymagicone{

    // အောက်ကနေ မရှိတဲ့properties ကိုခေါ်မိရင်အလုပ်လုပ်တာ
    public function __get($var){ 
        echo "You not yet defined these \"${var}\" properties. <br/>";
    }

    // အောက်ကနေ မရှိတဲ့properties ကိုခေါ်လည်းခေါ်မိတယ် value ကိုပါ assignလုပ်မိရင် အလုပ်လုပ်တာ
    public function __set($var,$val){ 
        echo "You not yet defined these \"${var}\" properties. So, your value is \"${val}\" is here. <br/>";
    }

}

class mymagictwo{

    // For Non-Static Method 
    public function __call($mathod,$vals){
        // echo "You not yet defined these \"${mathod}\" non-static method. So, your value is \"${vals}\" is here. <br/>";
        echo "You not yet defined these \"${mathod}\" non-static method. So, your value is ". "<pre>".print_r($vals,true)."</pre>" ." is here. <br/>";
    }

    public static function __callstatic($mathod,$vals){
        echo "You not yet defined these \"${mathod}\" static method. So, your value is ". "<pre>".print_r($vals,true)."</pre>" ." is here. <br/>";
    }
    

}

class mymagicthree{

    public $data;

    public function __construct(){
        $this->data = [1,2,3,4,5];
    }

    // classထဲမှာ ၁ခုခုက serialize() လုပ်တာနဲ့အလုပ်လုပ်တာ
    public function __sleep(){
        echo "Hello sir, i am working. cuz you are trying to serialize. <br/>";
    }

}

class mymagicfour{

    public $data;

    public function __construct(){
        $this->data = [1,2,3,4,5];
    }

    // classထဲမှာ ၁ခုခုက unserialize() လုပ်တာနဲ့အလုပ်လုပ်တာ
    public function __wakeup(){
        echo "Hello sir, i am working. cuz you are trying to unserialize. <br/>";
    }

}

class mymagicfive{

    // class object ကို methodလို invoke လုပ်မိနေရင်
    public function __invoke(){
        echo "Hello sir, i am working. cuz you are trying to print-out your class object as method. <br/>";
    }
}

class mymagicsix{

    // class object print-out လုပ်မိရင်
    public function __toString(){
        return "Hello sir, i am working. cuz you are trying to print-out your class object. <br/>";
    }
}





echo "This is Magic Methods <br/>";

$obj = new mymagic(100);

echo "<hr/>";

$obj1 = new mymagicone();
$obj1->greeting;
$obj1->bye = "Thank You";

echo "<hr/>";

$obj2 = new mymagictwo();
$obj2->greeting();
$obj2->greeting("Morning");
$obj2->greeting("Morning","Afternoon","Evening");

$obj2::bye();
mymagictwo::bye("Thank You");
mymagictwo::bye("Thank You","Regards");

echo "<hr/>";

$obj3 = new mymagicthree();
serialize($obj3);

$obj4 = new mymagicfour();
$seidatas = serialize($obj4);
unserialize($seidatas);

$obj5 = new mymagicfive();
$obj5();

echo "<hr/>";

$obj6 = new mymagicsix();
echo $obj6;

echo "<hr/>";


?>


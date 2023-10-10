<?php

// constructor(magic method) class method ကိုလှမ်းပြီးinvokeလုပ်လိုက်ရုံနဲ့အလုပ်လုပ်မှာ သူကအရင်ဆုံးအလုပ်လုပ်မှာ

class myconstructor{

    public $num1 = 100;
    private $num2 = 200;
    protected $num3 = 300;

    public $message = "Total result is";
    
    // Magic Method

    // public function __construct(){
    //     echo "I am start working by automatically !! hee hee :P";
    // }

    // public function __construct($name){
    //     echo "I am ${name}. I am start working by automatically !! hee hee :P";
    // }

    public function __construct(){
        $result = $this->num1+$this->num2+$this->num3;

        echo "$this->message : $result <br/>"; // Total result is : 600
        echo "{$this->message} : ${result} <br/>"; // Total result is : 600
    }

}

echo "This is Constructor";

// new myconstructor(); //I am start working by automatically !! hee hee :P

// new myconstructor("Robot"); //I am Robot. I am start working by automatically !! hee hee :P
// ဒီကထည့်လိုက်တဲ့ parameter က __construct မှာ လာအလုပ်လုပ်မယ် paramerterထည့်လို့ရတဲ့ constructor


new myconstructor();

echo "<hr/>";



?>
<?php

// Note :: void is a return-only for type declaration indicating assign. the function does not return a value.void available as for PHP 7.1 to above.

declare(strict_types=1);

class mytypehinting{

    public $name;

    public function getname():string{
        return $this->name;
    }

    public function setname(string $val):void{
        $this->name = $val;
    }
    // :void က retrun မပြန်ဘူး data assignလုပ်တာလို့ပဲပြောတာ (void က Php version 7.1 နဲ့အထက်ပဲသုံးလို့ရမယ်)

}

class person extends mytypehinting{
    public $userid;
    public $username;

    function setinfo(array $arr):void{
        $this->userid = $arr['id'];
        $this->username = $arr['name'];
    }
}

echo "This is Type hinting <br/>";

$obj1 = new mytypehinting();
$obj1->setname("Aung Kyaw Kyaw");
echo $obj1->getname();

$obj2 = new person();
$obj2->setname("su su");
echo $obj2->getname(); // Aung Kyaw Kyaw

$datas = ["id"=>1,"name"=>"Honey Nway Oo"];

$obj2->setinfo($datas);
echo $obj2->userid;
echo $obj2->username;

echo "<hr/>";



?>
<?php

// Note :: must return 

declare(restrict_types=1);

class myhit8{

    public function getdata($val){
        return $val;
    }

}

echo "This is Return Type Hinting" ."<br/>";


$obj8 = new myhit8();
echo $obj8->getdata("aungaung"); // aungaung
echo $obj8->getdata("10"); // 10
echo $obj8->getdata(100); // aungaung
echo $obj8->getdata(25.68); // 25.68
echo $obj8->getdata(true); // 1
echo $obj8->getdata(["red","green","blue"]); // Array

echo "<hr/>";

class myhit9{

    public function getdata(string $val):string{
        return $val;
    }

}

$obj9 = new myhit9();
echo $obj9->getdata("aungaung"); // aungaung aungaung aungaung
echo $obj9->getdata("10"); // 10 10 10

echo "<hr/>";


class myhit10{

    public function getdata(int $val):int{
        return $val;
    }

}

$obj10 = new myhit10();
echo $obj10->getdata(100); //100 100

echo "<hr/>";


class myhit11{

    public function getdata(int $x,string $y):int{
        return $x+$y; // ဒီမှာ <br/> သွားပေးလိုက်ရင် errorအကြီးကြီးတက်မှာ (အဲ့ဒါကြောင့် return ပြန်တဲ့အခါ  <br/> ကိုသတိထားသုံး echoမှာပဲသုံး)
    }

}

$obj11 = new myhit11();
echo $obj11->getdata(10,"200"); //10200

echo "<hr/>";



class myhit12{

    public function getdata(bool $val):bool{
        return $val;
    }

}

$obj12 = new myhit12();
echo $obj12->getdata(true); //1 1 1

echo "<hr/>";


class myhit13{

    public function getdata(float $val):float{
        return $val;
    }

}

$obj13 = new myhit13();
echo $obj13->getdata(100); //100 100 100
echo "<br/>";
echo $obj13->getdata(25.68); //25.68 25.68 25.68

echo "<hr/>";






?>
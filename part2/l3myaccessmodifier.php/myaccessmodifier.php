<?php


class myaccessmodifier{
    
    //Access Modifier
    // (i) public = anywhere can access 
    // (ii) private = only  can access inside this main class
    // (iii) protected = subclass / extented class

    public $companyname = "Data Land Technology";
    // private $companyname = "Data Land Technology"; //error can't print outside
    // protected $companyname = "Data Land Technology";

    var $personname = "Mr.Tin";

    public function getnum(){
        $num = 10;
        echo $num;

        echo $companyname; //can't print
        echo $personname;
    }

}

$obj = new myaccessmodifier();
echo "This is Access Modifier <br/>";

echo $obj->companyname . "<br/>"; 
$obj->getnum() . "<br/>"; //10 only can print by public(access modifier)

echo "<br/>";

$obj->companyname = "ABC Co.,Ltd";
echo $obj->companyname . "<br/>"; 

$obj->personname = "Ko tha";
echo $obj->personname . "<br/>"; 




echo "<hr/>";



?>
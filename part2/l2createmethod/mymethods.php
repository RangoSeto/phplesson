<?php

// echo "hay";


// Define Class Object 

//classname ရှေ့စာလုံးအကြီးပေးသင့် (classname ကို filenameနဲ့တူအောင်ပေးသင့် ခေါ်လို့လွယ်အောင်)
// class classname{
//     properties 
//     methods
// }

// new classname();  // invoke class //classnameကို invokeလုပ်ရင် ()မထည့်လည်းရထည့်လည်းရ ဒါပေမယ့် ထည့်ပေးလိုက်



class mymethods{
    
    //Access Modifier
    // (i) public = anywhere can access 
    // (ii) private = only  can access inside this main class
    // (iii) protected = subclass / extented class


    // Class Methods  (ဘာမှမပါရင် publicနဲ့ဝင်)
    public function greeting(){
        echo "Have a good day. <br/>";
    }

    public function calculate($num){
        echo "Getting calculate nuumber is = ${num} <br/>";
    }

    public function result($num=1){
        echo "Getting result nuumber is = ${num} <br/>";
    }

}

$obj = new mymethods();
echo "This is Class Method <br/>";

echo $obj->greeting(); //Have a good day.

// echo $obj->calculate(); //error
echo $obj->calculate(150); //Getting calculate nuumber is = 150

echo $obj->result(200);//Getting result nuumber is = 200
echo $obj->result(1); //Getting result nuumber is = 1

echo "<hr/>";



?>
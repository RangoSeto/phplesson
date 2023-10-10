<?php

// echo "hay";


// Define Class Object 

//classname ရှေ့စာလုံးအကြီးပေးသင့် (classname ကို filenameနဲ့တူအောင်ပေးသင့် ခေါ်လို့လွယ်အောင်)
// class classname{
//     properties 
//     methods
// }

// new classname();  // invoke class //classnameကို invokeလုပ်ရင် ()မထည့်လည်းရထည့်လည်းရ ဒါပေမယ့် ထည့်ပေးလိုက်



class myproperties{
    //Properties
    var $firstname = "Data Land ";
    var $lastname = "Technology";

}

$obj = new myproperties();
echo "This is Class Object <br/>";

echo $obj->firstname.$obj->lastname;

echo "<hr/>";



?>
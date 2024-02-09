<?php

// auto loading (or) dynamic calling 

// require_once ("./music.php");
// require_once ("./video.php");

// spl_autoload_register(callback function)
spl_autoload_register(function($classname){
    echo "Loading the class = $classname <br/>";
    require_once("$classname.php");
});
// $classname ကအဲ့fileထဲမှာရှိနေတဲ့ file nameတွေကိုစောင့်ကြည့်နေမှာ အဲ့filenameကနေမှ classကို၁ခာတည်းinvokeလုပ်သွားမှာ အဲ့ကြောင့်filenameနဲ့classnameတူတူထားသင့်တယ်လို့ပြောတာ


// ဒီမှာခေါ်လိုက်တိုင်း autoloadကအလုပ်လုပ်ပြီး filename music.phpကိုrequire_once()သွားသွားလုပ်မှာ
$music = new music();
$music->play();

$video = new video();
$video->play();


// ** can't call (it's in sub folder)
// $photo = new photo();
// $photo->play();


echo "<hr/>";



?>

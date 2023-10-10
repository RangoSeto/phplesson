<?php

    // setcookie('thb','Thai Baht',time()+(86400*5)); //5days //သူကl55cookieslesson folderထဲရောက်နေလို့ l55cookies.phpမှာပေါ်မှာမဟုတ် သူ့ route အောက်ကဟာတွေပဲယူလို့ရမယ်
    // echo "Cookies Set Successfully";


    // => Syntax (Note:: exipire date သတ်မှတ်ပေးတာ)
    // setcookie('cookiename','value',expire,path);


    setcookie('thb','Thai Baht',time()+(86400*5),'/'); //5days // routeအကုန်လုံးကယူလို့ရစေချင်ရင် /သုံး
    echo "Cookies Set Successfully";

    // setcookie('thb','Thai Baht',time()+(86400*5),'/','http://abc.com'); //ဒီ cookies က ဒီhttp://abc.com siteပေါ်မှာပဲအလုပ်လုပုပ်စေချင်ရင်သုံး
    // setcookie('thb','Thai Baht',time()+(86400*5),'/','no'); //http:// https://ဘယ်ဟာကိုပဲယူစေချင်သုံး
?>
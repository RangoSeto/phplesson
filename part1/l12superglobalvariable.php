<?php
    // Super Global Variables (pre defined varibales)
    // 1. $GLOBALS
    // 2. $_SERVER
    // 3. $_REQUEST
    // 4. $_POST
    // 5. $_GET 
    // 6. $_FILES 
    // 7. $_ENV 
    // 8. $_COOKIE 
    // 9. $_SESSION


    // 1. $GLOBALS

    $num1 = 10;
    $num2 = 20;

    function totalresult(){
        $GLOBALS['result'] = $GLOBALS["num1"] + $GLOBALS["num2"];
    }

    totalresult();
    echo $result; // must invoke at least one time(ဒါမှ result ကိုသိပီးထွက်မှာ)

    echo "<hr/>";

    // 2. $_SERVER

    echo $_SERVER["PHP_SELF"]; // phpbatch3/part1/l12superglobalvariable.php (သူ့ရဲ့ပတ်လမိးကြောင်းကိုပြန်ပေးတာ folderကနေပဲစ)

    echo "<hr/>";

    echo $_SERVER["HTTP_USER_AGENT"]; // Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 ( ဘာosသုံးနေတာလဲ window or mac or phone , ဘာbrowserနဲ့သုံးနေတာလဲ chrome,...)

    echo "<hr/>";

    echo $_SERVER["HTTP_HOST"]; //localhost:8012 (api ကနေအသွားအပြန်လုပိဖို့ပေးတာ) * (check about it)

    echo "<hr/>";

    echo $_SERVER["SERVER_NAME"]; // localhost:8012 (return the name of host server - www.domainname.com) [domain name  ထုတ်ပေးတာ]

    echo "<hr/>";

    echo $_SERVER["SERVER_SOFTWARE"]; // Apache/2.4.53 (Win64) OpenSSL/1.1.1n PHP/8.1.6 (API တောင်းရင် ကိုကဘာsever သုံးတာဆိုတာတွေကိုမိတ်ဆက်ပေးရင်သုံးရတာ)

    echo "<hr/>";

    echo $_SERVER["SERVER_PORT"]; // 8012 (laptop မှာport တွေအများကြီးတယ် voice အတွက်၁ခု, video အတွက်၁ခု) [သူက firewallလိုဟာမျိုးပေါ့]

    echo "<hr/>";

    echo $_SERVER["SERVER_PROTOCOL"]; //HTTP/1.1

    echo "<hr/>";

    echo $_SERVER["SERVER_SIGNATURE"]; //Apache/2.4.53 (Win64) OpenSSL/1.1.1n PHP/8.1.6 Server at localhost Port 8012

    echo "<hr/>";

    echo $_SERVER["REQUEST_METHOD"]; //GET (ဒီ page ကဘာmethod နဲ့ဖွင့်ထားတာလဲပြောပေးတာ)

    echo "<hr/>";

    echo $_SERVER["REMOTE_ADDR"]; //::1 //returns the ip address from where the user is vewing the current page (ကိုယ့်websiteကိုလာသုံးတဲ့သူရဲ့ip address ကိုပေးတာ )

    echo "<hr/>";

    echo $_SERVER["SCRIPT_FILENAME"]; //C:/xampp/htdocs/phpbatch3/part1/l12superglobalvariable.php (absoluteပတ်လမ်းကြောင်းကိုပေး dir အစကနေယူ)

    echo "<hr/>";

    echo $_SERVER["SCRIPT_NAME"]; ///phpbatch3/part1/l12superglobalvariable.php (PHP_SELF နဲ့တူ)

    echo "<hr/>";

    // http://localhost:8012/phpbatch3/part1/l12superglobalvariable.php?aungaung
    echo $_SERVER['QUERY_STRING']; //aungaung (ရှာလိုက်တဲ့ဟာကိုထုတ်ပေးတာ)
    echo "<hr/>";


    // -----------------------------------------------------------------------





?>
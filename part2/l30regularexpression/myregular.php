<?php

class myregular{

    public function __construct(){

        $string = "We are family";

        // echo $string;

                    // preg_match() က case sensitive ဖြစ်တယ်
                    // preg_match(delimiter,string) // delimiter = / / ကြားထဲမှာေရးေပးရမှာ delimiterကို ဒါကိုrecommendလုပ်
        // $result = preg_match("We are family", $string); // it's false(error)
        $result = preg_match("/We are family/", $string); // it's true
        $result = preg_match("/family/", $string); // it's true
        $result = preg_match("/mily/", $string); // it's true


        // $ = သူကစာကြောင်းရဲ့နောက်ဆုံးမှာရှိမှန်မယ်လို့ပြောတာ
        $result = preg_match("/mily$/", $string); // it's true
        $result = preg_match("/are$/", $string); // it's false
        $result = preg_match("/we$/", $string); // it's false
        $result = preg_match("/family$/", $string); // it's true
        $result = preg_match("/Family$/", $string); // it's false

        // ^ = သူကစာကြောင်းရဲ့ရှေ့ဆုံးမှာရှိရမယ်လို့ပြောတာ
        $result = preg_match("/^mily/", $string); // it's false
        $result = preg_match("%^are%", $string); // it's false
        $result = preg_match("#^we#", $string); // it's false
        $result = preg_match("+^We+", $string); // it's true

        $result = preg_match("-^family$-", $string); // it's false //Note::string must be exact to data (family ပဲဖြစ်ကိုဖြစ်ရမယ်လို့ပြောတာ)
        $result = preg_match("!^$!", $string); // it's false //Note::string must be empty (emptyဖြစ်ရမယ်လို့ပြောချင်တာ)

        // i = case sensitive မဖြစ်စေချင်တော့ရင်သုံးမှာ
        $result = preg_match("/^we/", $string); // it's false
        $result = preg_match("/^we/i", $string); // it's true

        $result = preg_match("/[b-d]/", $string); // it's false
        $result = preg_match("/[a-f]/", $string); // it's true
        $result = preg_match("/[a-z]/", $string); // it's true
        $result = preg_match("/[A-Z]/", $string); // it's true
        $result = preg_match("/[0-4]/", $string); // it's false


        $string = "my lucky number is 567";

        $result = preg_match("/[0-4]/", $string); // it's false
        $result = preg_match("/[5-9]/", $string); // it's true
        $result = preg_match("/[a-z]/", $string); // it's true
        $result = preg_match("/[A-Z]/", $string); // it's false
        $result = preg_match("/[A-Z]|[a-z]/", $string); // it's true // A to Z or a to z ၁ခုခုပါတာနဲ့ trueဖြစ်ပီ
        $result = preg_match("/^[a-z]/", $string); // it's true
        $result = preg_match("/[a-z]$/", $string); // it's false
        $result = preg_match("/^[5-9]/", $string); // it's false
        $result = preg_match("/[5-9]$/", $string); // it's true

        // [^a-z] = a to z မဟုတ်တဲ့ဟာတွေပါနေလား စစ်တာ (ပါနေရင်true မပါတော့ရင်false)
        $result = preg_match("/[^a-z]/", $string); // it's true (it's mean not include a to z ,result is true cuz the string included spacing & number)
        $result = preg_match("/[^5-9]/", $string); // it's true (it's mean not include a to z ,result is true cuz the string included spacing & string)
        $result = preg_match("/[^0-4]/", $string); // it's true (it's mean not include a to z ,result is true cuz the string included spacing & string & 56789)

        $result = preg_match("/@/", $string); // it's false (ဒီစာသားထဲမှာ @ ပါလားစစ်တာ)

        $string = "admin@gmail.com";
        $result = preg_match("/@/", $string); // it's true
        $result = preg_match("/m/", $string); // it's true
        $result = preg_match("/m+/", $string); // it's true (m က၁လုံးထဲပါလည်းရတယ် ၁လုံးထက်ပိုပါလည်းရတယ် ၁လုံးကတော့ပါကိုပါရမှာ)
        $result = preg_match("/b+/", $string); // it's false
        $result = preg_match("/b*/", $string); // it's true // bပါလည်းရတယ် မပါလည်းရတယ် ၁လုံးထပ်ပိုပါလည်းရတယ်
        $result = preg_match("/b?/", $string); // it's true // bပါလည်းရတယ် မပါလည်းရတယ် ၁လုံးထပ်ပိုပါလည်းရတယ်
        $result = preg_match("/m{1}/", $string); // it's true // m၁လုံးပါရမယ်
        $result = preg_match("/m{2}/", $string); // it's false // m၂လုံးပါရမယ် အဲ့၂လုံးကလည်း ၁ဆက်တည်းဖြစ်ရမယ် mm


        $string = "adminnn@gmail.com";
        $result = preg_match("/n{1}/", $string); // it's true // n၁လုံးပါမယ် အဲ့ထပ်ပိုပါလည်းရတယ်
        $result = preg_match("/n{2}/", $string); // it's true // n၂လုံးပါမယ် ၁ဆက်တည်းဖြစ်ရမယ် mm အဲ့ထပ်ပိုပါလည်းရတယ် 
        $result = preg_match("/n{3}/", $string); // it's false // m၃လုံးပါရမယ် အဲ့၃လုံးကလည်း ၁ဆက်တည်းဖြစ်ရမယ် mm အဲ့ထပ်ပိုပါလည်းရတယ် 
        $result = preg_match("/n{2,3}/", $string); // it's true // m၂လုံးကနေ ၃လုံးကြားပါလို့ရမယ် အဲ့ဒါကလည်း ၁ဆက်တည်းဖြစ်ရမယ် mm mmm အဲ့ထပ်ပိုပါလည်းရတယ် 
        $result = preg_match("/n{2,}/", $string); // it's true // m၂လုံးပါရမယ် အဲ့၂လုံးကလည်း ၁ဆက်တည်းဖြစ်ရမယ် mm အဲ့ထပ်ပိုပါလည်းရတယ် 
        $result = preg_match("/\s/", $string); // it's false // spaceပါနေလားစစ်တာ

        $string = "V8 Engine";
        // \s = spaceပါနေလားစစ်တာ
        $result = preg_match("/\s/", $string); // it's true 
        // \d = numberပါနေလားစစ်တာ
        $result = preg_match("/\d/", $string); // it's true 
        // \D = numberမဟုတ်တဲ့ဟာတွေပါနေသလားစစ်
        $result = preg_match("/\D/", $string); // it's true 
        // \w = word ၁ခုခုပါနေသလားစစ်တာ word=[a-z] [A-Z] [0-9] notchar=@#$ ...
        $result = preg_match("/\w/", $string); // it's true 
        // \W = word မဟုတ်တဲ့ဟာ၁ခုခုပါနေသလား word=[a-z] [A-Z] [0-9] notchar=@#$ ...
        $result = preg_match("/\W/", $string); // it's true 


        $string = "528";
        $result = preg_match("/\d/", $string); // it's true 
        $result = preg_match("/\D/", $string); // it's false 
        $result = preg_match("/\w/", $string); // it's true 
        $result = preg_match("/\W/", $string); // it's false 


        $string = "adminn@gmail.com";
        $result = preg_match("/a\wm/",$string); // it's true (a နဲ့ m ကြား မှာစာလုံး၁လံုးကြိုက်တာရှိလို့ရ)
        $result = preg_match("/a\w{1}m/",$string); // it's true 
        $result = preg_match("/a\w{2}m/",$string); // it's false . cuz any exact 2 words
        $result = preg_match("/a\w{2,4}m/",$string); // it's false . cuz any exact 2 to 4 words
        $result = preg_match("/a\w{2,}m/",$string); // it's false . cuz any exact 2 to nth words

        // . = ကြိုက်တဲ့charဖြစ်လို့ရတယ် #@ ကြိုက်တာဖြစ်လို့ရတယ်
        $result = preg_match("/a.m/",$string); // it's true .
        $result = preg_match("/a..m/",$string); // it's false .
        $result = preg_match("/a.{1}m/",$string); // it's true .
        $result = preg_match("/a.{2}m/",$string); // it's false . cuz any exact 2 char
        $result = preg_match("/a.{2,4}m/",$string); // it's false . cuz any exact 2 to 4 char
        $result = preg_match("/a.{2,}m/",$string); // it's true . cuz any exact 2 to nth char


        $string = "PHP";
        $result = preg_match("/.{2}/",$string); // it's true

        $string = "Vv";
        $result = preg_match("/.{2,}/",$string); // it's true
        $result = preg_match("/^.{2}$/",$string); // it's true (exact 2 characters)(စာလုံး၂လုံးပဲရှိရမယ်)

        $string = "Welcome to our <i>programming class</i>";
        $result = preg_match("/<i>\w*<\/i>/",$string); // it's false. cuz spacing exist
        $result = preg_match("/<i>.*<\/i>/",$string); // it's true
        $result = preg_match("/<i>(.*)<\/i>/",$string); // it's true ဒီလို ()ထည့်ရေးလည်းအတူတူပဲ

        $string = "PHP";
        $result = preg_match("/<i>p(hp)*<\/i>/",$string); // it's true
        $result = preg_match("/<i>p(hp)+<\/i>/",$string); // it's true ဒီလို


        $string = "admin@gmail.com";
        $result = preg_match("/^[a-z,A-Z]+@[a-z]+\.\w{3}/",$string); // it's true //^[a-z,A-Z]=atoz or AtoZ ၁ခုခုနဲ့စရမယ် (+ ကအဲ့စာတွဲ၁တွဲလုံးကိုပြောချင်တာ)

        echo $result ? "it's true" : "it's false";

        echo "<hr/>";

        // preg_replace(pattern,replacement,string)
        $string = "Are you ready to learn PHP Framework";
        $result = preg_replace("/php/i","javascript",$string);
        echo "$result <br/>"; // Are you ready to learn javascript Framework

        $result = preg_replace("/\s/","",$string); 
        echo "$result <br/>" ; // AreyoureadytolearnPHPFramework


        // Bracket Expressions
        $string = "admin123@gmail .com";

        // [[:space:]] = space
        $result = preg_replace("/[[:space:]]/","x",$string);
        echo "$result <br/>"; //admin123@gmailx.com

        $result = preg_replace("/[[:space:]]/","",$string);
        echo "$result <br/>"; //admin123@gmail.com

        // [[:alpha:]] = alphabetic characters
        $result = preg_replace("/[[:alpha:]]/","x",$string); //admin123@gmail.com
        echo "$result <br/>"; //xxxxx123@xxxxx .xxx

        // [[:digit:]] = digit
        $result = preg_replace("/[[:digit:]]/","x",$string); //admin123@gmail.com
        echo "$result <br/>"; // adminxxx@gmail .com

        // [[:alnum:]] = alphanumeric characters
        $result = preg_replace("/[[:alnum:]]/","x",$string); //admin123@gmail.com
        echo "$result <br/>"; // xxxxxxxx@xxxxx .xxx

        // [[:punct:]] = Punctuation characters
        $result = preg_replace("/[[:punct:]]/","x",$string); //admin123@gmail.com
        echo "$result <br/>"; // admin123xgmail xcom

        // [[:lower:]] = Lower-case characters
        $result = preg_replace("/[[:lower:]]/","x",$string); //admin123@gmail.com
        echo "$result <br/>"; // xxxxx123@xxxxx .xxx

        // [[:upper:]] = Upper-case characters
        $result = preg_replace("/[[:upper:]]/","x",$string); //admin123@gmail.com
        echo "$result <br/>"; // admin123@gmail .com
        

        $string = "Are you ready to learn PHP Framework";
        $result = preg_replace(["/PHP/","/framework/i"],["javascript","libraries"],$string);
        echo "$result <br/>"; // Are you ready to learn javascript libraries


        $string = "My lucky number is 007 but i got ticket number 5700";
        $result = preg_replace("/[0-9]/","x",$string);
        echo "$result <br/>"; // My lucky number is xxx but i got ticket number xxxx

        $result = preg_replace("/[0-9]+/","x",$string);
        echo "$result <br/>"; // My lucky number is x but i got ticket number x


                                    // no limit=0 (or) NULL
        // preg_split(pattern,string,limit,flags);
        $string = "My lucky number is 007";
        $result = preg_split("/\s/",$string);
        echo $result; // Array
        echo "<pre>".print_r($result,true)."</pre>";
        echo "$result[0] <br/>"; // My
        echo "$result[2] <br/>"; // number


        $result = preg_split("/\s/",$string,3);
        echo $result; // Array
        echo "<pre>".print_r($result,true)."</pre>";
        echo "$result[0] <br/>"; // My
        echo "$result[2] <br/>"; // number is 007


        $string = "My lucky number is 007, but i got ticket number 5700";

        $result = preg_split("/\s/",$string);
        echo "<pre>".print_r($result,true)."</pre>";

        $result = preg_split("/[\s]]/",$string); // [\s]ကလည်းspaceကိုပြောချင်တာပဲ
        echo "<pre>".print_r($result,true)."</pre>";

        $result = preg_split("/\s,/",$string); // space , ဖြစ်တဲ့ဟာကိုပဲခွဲထုတ်သွားမယ် ဒီမှာက ,spaceဖြစ်နေလို့မခွဲဘူး
        echo "<pre>".print_r($result,true)."</pre>";

        $result = preg_split("/[\s,]/",$string); // spaceနဲ့ရော ,ရော၂မျိုးလုံးနဲ့ခွဲထုတ်သွားမယ်(,ကိုရောidx၁ခုအနေနဲ့ဝင်သွားတာ အထဲမှာတော့ဘာdataမှမပါဘူး)(length=12)
        echo "<pre>".print_r($result,true)."</pre>";

        $result = preg_split("/[\s,]/",$string,NULL,PREG_SPLIT_NO_EMPTY); //emptyဖြစ်နေတဲ့idxတွေကိုဖယ်ထုတ်ပစ်တာ
        echo "<pre>".print_r($result,true)."</pre>";
        
        $result = preg_split("//",$string,NULL,PREG_SPLIT_NO_EMPTY);
        echo "<pre>".print_r($result,true)."</pre>"; // ၁ခုချင်းစီ ခွဲထုတ်တော့ရှေ့ဆုံးနဲ့နောက်ဆုံးမှာempty၂ခုပါနေတာအဲ့တာက"တွေကိုပါcountလုပ်နေလို့ မလိုချင်လို့ PREG_SPLIT_NO_EMPTY နဲ့ပြန်ဖြုတ်တာ
        


        // preg_quote()

        $string = "He\'s my father,do you know him?";

        $result = preg_quote($string);
        echo $result; // He\\'s my father,do you know him\?

        echo "<br/>";

        $result = preg_quote($string,"o");
        echo $result; // He\\'s my father,d\o y\ou kn\ow him\?



        // preg_match_all(pattern,string,return,flags)

        $string = "Winning numbers are 227-000 & 002-777 , but my ticket number is 007-222";

        preg_match_all("/\d+-\d+/",$string,$result,PREG_SET_ORDER); //multidimension arr အနေနဲ့ထွက်လာတာ
        echo "<pre>".print_r($result,true)."</pre>";

        preg_match_all("/\d-\d/",$string,$result,PREG_PATTERN_ORDER); //associative arr အနေနဲ့ထွက်လာတာ
        echo "<pre>".print_r($result,true)."</pre>";


        // lookahead & lookbehind
        // (?=) positive lookahead (or) regax lookahead     = right hand side
        // (?<=) positive lookbehind (or) regax lookbehind  = left hand side

        // (?!) negative lookahead                      
        // (?<!) negative lookbehind

        $string = "aungkyaw@cisco.com";
        $result = preg_match("/@(?=cisco)/",$string); // it's true (positive lookahead)
        $result = preg_match("/(?<=@)cisco/",$string); // it's true (positive lookbehind)

        $result = preg_match("/@(?!cisco)/",$string); // it's false (negative lookahead)
        $result = preg_match("/(?<!@)cisco/",$string); // it's false (negative lookbehind)

        echo $result ? "it's true" : "it's false";


        $strongpassword = "abc#7D";

        $result = preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*([[:punct:]]))/",$strongpassword);
        echo $result ? "it's true" : "it's false";

    }

}

echo "This is regular expression <br/>";
$obj = new myregular();

echo "<hr/>";

?>


<!-- $ = must be in end (case sensitive) -->
<!-- ^ = caret or circumflex , must be in start (cs) -->
<!-- i = no case sensitive -->
<!-- [] = range a-z A-Z 0-9 -->
<!-- m+ = must contain m and more  -->
<!-- b* = contain b or not and more  -->
<!-- b? = contain b or not and more  -->
<!-- m{nth} contain same place m as per nth or more -->
<!-- m{nth,nth} contain same place m as per nth or more -->
<!-- m{nth,} contain same place m as per nth or more -->
<!-- \s = space -->
<!-- \d = digit -->
<!-- \D = have any no digit  -->
<!-- \w = any word [a-z] [A-Z] [0-9] -->
<!-- \W = any word @#$  -->
<!-- . = any characters  -->
<!-- (w=word .=char) -->

<!-- () mean this -->
<!-- + mean must  -->
<!-- p(hp)* can be contain hp -->
<!-- p(hp)+ must be contain hp -->
<!-- [[:space:]] mean space  -->
<!-- [[:alpha:]] mean alphabetic characters -->
<!-- [[:digit:]] mean digit  -->
<!-- [[:alnum:]] mean alphanumeric characters -->
<!-- [[:punct:]] mean Punctuation characters -->
<!-- [[:lower:]] mean Lower-case characters -->
<!-- [[:upper:]] mean Upper-case characters -->

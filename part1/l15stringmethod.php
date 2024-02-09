<?php

// strlen() Function
// strlen(string)

$words = "Save Myanmar";
echo strlen($words); //12

echo "<hr/>";


// str_word_count() Function
// str_word_count(string,return)

// 0 - Default (string)
// 1 - Return an array
// 2 - Return an array (strရဲ့idx ကိုယူပီး arrရဲ့ idx ကိုပေးလိုက်တာ)

$words = "Save Myanmar Country";
echo str_word_count($words); //3
echo "<br/>";
echo str_word_count($words,0); //3
echo "<pre>". print_r(str_word_count($words,1),"true")."</pre>";  //[0] => Save [1] => Myanmar [2] => Country 
echo "<pre>". print_r(str_word_count($words,2),"true")."</pre>"; //[0] => Save [5] => Myanmar [13] => Country

echo "<hr/>";

// ucwords() Function (uppercaseပြောင်းတာ capitalize လိုပုံစံ)
// ucwords(string,delimiters)
$words = "myanmar country";
echo ucwords($words); //Myanmar Country
echo "<br/>";

$words = "welcome to my,country";
echo ucwords($words,","); //Welcome to my,Country (,နဲ့ကပ်နေတဲ့ဟာကအကြီးဖြစ်မယ် ရှေ့ဆုံး၁ခုကတော့အကြီးဖြစ်ကိုဖြစ်ရမှာမလို့)

echo "<hr/>";


// ucfirst() Function
// ucfirst(string)

$words = "welcome to my country";
echo ucfirst($words); //Welcome to my country

echo "<hr/>";

// lcfirst() Function
// lcfirst(string)

$words = "Welcome To My Country";
echo lcfirst($words); //welcome To My Country

echo "<hr/>";


// strtoupper() Function
// strtoupper(string)

$words = "welcome to my counntry";
echo strtoupper($words);

echo "<hr/>";


// strtolower()  Function
// strtolower(string)

$words = "WELCOME to My Country";
echo strtolower($words); //welcome to my country

echo "<hr/>";


// chunk_split() Function
// chunk_split(string,length,end)

$words = "Myanmar Country";
echo chunk_split($words,1,"."); //M.y.a.n.m.a.r. .C.o.u.n.t.r.y.
echo "<br/>";
echo chunk_split($words,3,"-"); //Mya-nma-r C-oun-try-

echo "<hr/>";


// substr() Function
// substr(string,start,length)

$words = "Welcome Myanmar";
echo substr($words,0); //Welcome Myanmar
echo "<br/>";
echo substr($words,8); //Myanmar
echo "<br/>";
echo substr($words,0,7); //Welcome
echo "<br/>";
echo substr($words,0,9); //Welcome M

echo "<hr/>";


// substr_replace() Function
// substr_replace(string,replacement,start,lenght)

$words = "Welcome Myanmar";
echo substr_replace($words,"Hello",0); //Hello
echo "<br/>";
echo substr_replace($words,"Thailand",8); //Welcome Thailand
echo "<br/>";

echo substr_replace($words,"Hello",0,0); //HelloWelcome Myanmar
echo "<br/>";
echo substr_replace($words,"Thailand",0,7); //Thailand Myanmar
echo "<br/>";

echo "<hr/>";


// trim() Function
// trim(string,charlist)

$words = "Welcome to My Country";
echo trim($words,"Wel"); //come to My Country
echo "<br/>";
echo trim($words,"try"); //Welcome to My Coun
echo "<br/>";

echo "<hr/>";


// str_repeat() Function
// str_repeat(string,count)

echo str_repeat("A Kyal Gyi ",3); //A Kyal Gyi A Kyal Gyi A Kyal Gyi

echo "<hr/>";


// explode() Function
// explode(separator,string,limit)

$words = "Welcome to My Country";
echo "<pre>".print_r(explode(" ",$words),"true")."</pre>"; // [0] => Welcome [1] => to [2] => My [3] => Country

echo "<pre>".print_r(explode(" ",$words,0),"true")."</pre>"; // [0] => Welcome to My Country
echo "<pre>".print_r(explode(" ",$words,2),"true")."</pre>"; // [0] => Welcome [1] => to My Country
echo "<pre>".print_r(explode(" ",$words,3),"true")."</pre>"; // [0] => Welcome [1] => to [2] => My Country

echo "<hr/>";


// implode() Function
// implode(separator,array)

$words = ["Welcome","to","My","Country"];
echo "<pre>". print_r(implode(" ",$words),"true")."</pre>"; //Welcome to My Country
echo "<pre>". print_r(implode("-",$words),"true")."</pre>"; //Welcome-to-My-Country

echo "<hr/>";


// join() Function
// join(separator,array)

$words = ["Welcome","to","My","Country"];
echo "<pre>". print_r(join(" ",$words),"true")."</pre>"; //Welcome to My Country
echo "<pre>". print_r(join("-",$words),"true")."</pre>"; //Welcome-to-My-Country

echo "<hr/>";


// number_format() Function
// number_format(number,decimals)

echo number_format("1000000"). "<br/>"; //1,000,000
echo number_format("1000000",2). "<br/>"; //1,000,000.00

echo "<hr/>";


// stripslashes(string)
$str = "he\'s my father";
echo $str;
echo "<br/>";
echo stripslashes($str); // slash(\) တွေပါရင်ဖြုတ်ပေး

echo "<hr/>";

// basename();
$path = "./assets/img/cover.jpg";
echo $path ."<br/>"; // ./assets/img/cover.jpg
echo basename($path) ."<br/>"; //cover.jpg
echo basename($path,".jpg") ."<br/>"; //cover //စာသားကိုနောက်ကနေဖြတ်ထုတ်ပေးမှာ

echo "<hr/>";

// pathinfo() Function
// pathinfo(path,option) //အမျိုးအစားကိုခွဲထုတ်ပေးလိုက်တာ

// PATHINFO_DIRNAME
// PATHINFO_BASENAME
// PATHINFO_EXTENSION
// PATHINFO_FILENAME

$filepath = "./assets/img/user/cover.jpg";

echo "<pre>".print_r(pathinfo($filepath),true)."</pre>";
// Array
// (
//     [dirname] => ./assets/img/user
//     [basename] => cover.jpg
//     [extension] => jpg
//     [filename] => cover
// )

echo pathinfo($filepath,PATHINFO_DIRNAME); // ./assets/img/user
echo "<br/>";
echo pathinfo($filepath,PATHINFO_BASENAME); // cover.jpg
echo "<br/>";
echo pathinfo($filepath,PATHINFO_EXTENSION); // jpg
echo "<br/>";
echo pathinfo($filepath,PATHINFO_FILENAME); // cover
echo "<br/>";




?>
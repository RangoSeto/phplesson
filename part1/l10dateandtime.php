<?php

// data time ပေးရင်၁ခါထဲ time zone သတ်မှတ်ပေး (phpကseverကtimeကိုယူတာမလို့ jsကကိုယ့်စက်ကဟာကိုပြတာ)
// (sever1ခုထဲမှာမတူညီတဲ့ timezone တွေထည့်လို့ရ, အဲ့လိုနိုင်ငံမျိုးစုံကသုံးမယ်ဆို condition စစ်ပီးထည့်လို့ရ)

date_default_timezone_set("Asia/Yangon"); //24 hr format နဲ့ရ

$getdate =getdate();

echo $getdate;
echo "<br/>";
var_dump($getdate);
echo "<br/>";

echo "This is seconds = ".$getdate["seconds"]."<br/>";
echo "This is minutes = ".$getdate["minutes"]."<br/>";
echo "This is hours = ".$getdate["hours"]."<br/>";

echo "This is weekday = ".$getdate["weekday"]."<br/>"; //Friday;
echo "This is wday = ".$getdate["wday"]."<br/>"; //5 (day of the week 0=sunday 1=monday...)
echo "This is yday = ".$getdate["yday"]."<br/>"; //61 (day of the year)(ဒါက 61 ရက်မြောက်နေ့)

echo "This is month = ".$getdate["month"]."<br/>"; //March
echo "This is mon = ".$getdate["mon"]."<br/>"; //3 (day month) လကိုပြောတာ
echo "This is mday = ".$getdate["mday"]."<br/>"; //3 (day of the month)ရက်ကိုပြောတာ

echo "This is year = ".$getdate["year"]."<br/>"; //2023


echo "This is 0 = ".$getdate["0"]."<br/>"; //1677841522 (secondတွေစုစုပေါင်းပြပေးတာ (1 Jan 1970 to ...))

$time = time(); // timestamp
echo "This is time timestamp = ". $time . "<br/>"; //1677842047



// DATE/TIME Format
// date(format,timestamp)

$date = date("a",$time);
echo "This is format a = ". $date . "<br/>"; // am / pm
$date = date("A",$time);
echo "This is format A = ". $date . "<br/>"; // AM / PM

$date = date("d",$time);
echo "This is format d = ". $date . "<br/>"; // 03 (day leading zero) 3ရက်နေ့
$date = date("D",$time);
echo "This is format D = ". $date . "<br/>"; // Fri (Sun, Mon)

$date = date("F",$time);
echo "This is format F = ". $date . "<br/>"; // March (January, December)

$date = date("g",$time);
echo "This is format g = ". $date . "<br/>"; // 5 (hour by number [by 12hr format , no leading zero])
$date = date("G",$time);
echo "This is format G = ". $date . "<br/>"; // 17 (hour by number [by 24hr format , no leading zero])

$date = date("h",$time);
echo "This is format h = ". $date . "<br/>"; // 05 (hour by number [by 12hr format , leading zero])
$date = date("H",$time);
echo "This is format H = ". $date . "<br/>"; // 17 (hour by number [by 24hr format , leading zero])

$date = date("i",$time);
echo "This is format i = ". $date . "<br/>"; // 58 (minute)

$date = date("j",$time);
echo "This is format j = ". $date . "<br/>"; // 3 (day, no leading zero)

$date = date("l",$time);
echo "This is format l = ". $date . "<br/>"; // Friday
$date = date("L",$time);
echo "This is format L = ". $date . "<br/>"; // 0 // leap year (1=true, 0=false) (ရက်ထပ်နှစ်ကိုပြောတာ) 

$date = date("m",$time);
echo "This is format m = ". $date . "<br/>"; // 03 (day , leadin zero)
$date = date("M",$time);
echo "This is format M = ". $date . "<br/>"; // Mar (Jan/Feb)

$date = date("n",$time);
echo "This is format n = ". $date . "<br/>"; // 3 (day , no leading zero)

$date = date("r",$time);
echo "This is format r = ". $date . "<br/>"; // Fri, 03 Mar 2023 18:07:27 +0630

$date = date("s",$time);
echo "This is format s = ". $date . "<br/>"; // 47 seconds

$date = date("U",$time);
echo "This is format U = ". $date . "<br/>"; //1677843519 (millisecondsတွေပေါင်ထားတာတွေပြ)

$date = date("y",$time);
echo "This is format y = ". $date . "<br/>"; // 23 (year shortcode)
$date = date("Y",$time);
echo "This is format Y = ". $date . "<br/>"; // 2023 (year)

$date = date("z",$time);
echo "This is format z = ". $date . "<br/>"; // 61 (days of year) (365ရက်ထဲမှာ 61 ရက်ပီးနေ့မြောက်လို့ပြောချင်တာ)



?>


<!-- https://www.php.net/manual/en/timezones.asia.php
ဒီမှာPhp က support လုပ်တဲ့timezone တွေရှိတယ်
-->

<!-- 3TT -->
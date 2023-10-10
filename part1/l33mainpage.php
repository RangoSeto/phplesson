<?php

// (header, sidebar, footer က page တိုင်းမှာပါနေတာကို ပြန်ရေးစရာမလိုပဲချိတ်)
// => include or require

// include "path/filename.fileformat";
// include ("path/filename.fileformat");
// require "path/filename.fileformat";
// require ("path/filename.fileformat");

// include_once "path/filename.fileformat";
// include_once ("path/filename.fileformat");
// require_once "path/filename.fileformat";
// require_once ("path/filename.fileformat");
// (include_once, require_once ကရှေ့မှာ၁ကြိမ်ခေါ်ပြီးသားဆိုအလုပ်မလုပ်တော့ဘူး နောက်မှခေါ်ရင်တော့ရမယ်)


// echo "This is Article 1 <br/>";
// include "./l34headerpage.php";
// echo "<br/>";
// require "./l35contentpage.php";
// echo "<br/>";
// include ("./l36footerpage.php");


echo "This is Article 2 <br/>";
include_once "./l34headerpage.php";
echo "<br/>";
require_once "./l35contentpage.php";
echo "<br/>";
include_once ("./l36footerpage.php");


echo "This is Article 3 <br/>";
include "./l34headerpage.php";
echo "<br/>";
require ("./l35contentpage.php");
echo "<br/>";
include ("./l36footerpage.php");


?>
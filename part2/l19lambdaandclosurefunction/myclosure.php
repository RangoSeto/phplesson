<?php

// => Lambda Style
echo "This is Lambda <br/>";

function mycal($num1,$num2,$funone){
    $total = $num1+$num2;
    $funone($total);
}

$fun = function($result){
    echo "Total result is ${result} <br/>";
};

mycal(100,200,$fun);



function showresult($addednum){
    echo "sum result is = ${addednum}";
}

$add = function($x,$y){
    return $x+$y;
};

showresult($add(100,500)); //sum result is = 600


echo "<hr/>";


echo "This is Closure Function <br/>";
// closure function use() က nameless fun/anonymous fun မှာပဲသုံးပေးလို့ရတာ

$num1 = 300; // Global Variable
$num2 = 400;

function colfun1(){
    global $num1,$num2;
    echo "This is regular function. my getting value is " .$num1+$num2 . "<br/>";
}

colfun1(); // This is regular function. my getting value is 700

$colfun2 = function() use($num1,$num2){
    echo "This is regular function. my getting value is " .$num1+$num2 . "<br/>";
};

$colfun2(); // This is regular function. my getting value is 700


echo "<hr/>";


function result($fun){
    $fun();
}

result(function()use($num1,$num2){
    echo "This is regular function. my getting value is " .$num1+$num2 . "<br/>";
});

echo "<hr/>";



// => Lambda with array walk

// array_walk(array,callbackfunction,parameter);


$colors = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"white","e"=>"black");
$idx = 0;

array_walk($colors,function($val,$key,$p) use(&$idx){
    $idx++;
    echo "Id is {$idx} / Key is {$key} and value is {$val} {$p} <br/>";
},"colour");

echo "<hr/>";




?>
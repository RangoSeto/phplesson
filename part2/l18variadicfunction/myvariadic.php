<?php

// => Spread Operator (...)

function sumresult($num1,$num2,$num3){
    return $num1+$num2+$num3;
}

echo sumresult(1,2,3); //6
echo "<br/>";

// echo sumresult([1,2,3]);
echo sumresult(...[1,2,3]);
echo "<br/>";


// => func_get_args()

function totalresult(){

    $arrs = func_get_args(); //parameter ထဲကdataအကုန်လုံးကိုarrအနေနဲ့ယူတာ
    // echo $arrs; //Array
    // echo "<pre>".print_r($arrs,true)."</pre>"; //Array
    // echo count($arrs); //3

    $total = 0;

    for($i=0; $i < count($arrs); $i++){
        $total += $arrs[$i];
    }

    return $total;

}

echo totalresult(10,20,30); //func_get_args()နဲ့ဆို parဘယ်လောက်ဖြစ်ဖြစ်အာရုံစိုက်စရာမလိုဘူး သူ့ထဲarrအနေနဲ့အကုန်ဝင်သွားမှာမလို့

echo "<hr/>";

function getval($val1,$val2,$val3){
    echo "Val1 result is = ${val1} <br/>";
    echo "Val2 result is = ${val2} <br/>";
    echo "Val3 result is = ${val3} <br/>";
}

getval("aung aung","maung maung","kyaw kyaw"); //Val1 result is = aung aung Val2 result is = maung maung Val3 result is = kyaw kyaw
// getval(["red","green","blue"]); //error
getval(...["red","green","blue"]); //Val1 result is = red Val2 result is = green Val3 result is = blue

echo "<hr/>";


// => Spread Operator In array 

$phones = ["apple","oppo","vivo","samsung"];
$cars = ["toyota","suzuki","mazada"];
$computer = ["mac","aoc","acer"];

$myowns = [$phones,$cars,$computer];
echo "<pre>".print_r($myowns,true)."</pre>"; // multi dimation array

$myowns = [...$phones,...$cars,...$computer];
echo "<pre>".print_r($myowns,true)."</pre>"; // manual array



echo "<hr/>";


echo "This is Variadic Function <br/>";

function myfun1($val){
    return $val;
}

echo myfun1("mango"); //mango
echo "<br/>";
echo myfun1("mango","orange"); //mango
echo "<br/>";

function myfun2(...$val){
    return $val;
}

echo myfun2(); // Array

// echo myfun2("mango"); //mango
// echo "<br/>";
// echo myfun2("mango","orange"); //mango
// echo "<br/>";

echo "<pre>".print_r(myfun2("mango"),true)."</pre>";
echo "<pre>".print_r(myfun2("mango","orange"),true)."</pre>";

echo "<pre>".print_r(myfun2(100,200,300),true)."</pre>";
echo "<pre>".print_r(myfun2(["aung aung","kyaw kyaw"],["su su","nu nu"]),true)."</pre>";
echo "<pre>".print_r(myfun2("red","green","blue",["aung aung","kyaw kyaw"],["su su","nu nu"]),true)."</pre>";


function myfun3(...$val){
    echo $val[1] . "<br/>";
}

myfun3("maung maung","aung aung","zaw zaw"); // aung aung
myfun3(["maung maung","aung aung","zaw zaw"],"su su"); //su su

function myfun4(...$val):string{
    return $val[2] . $val[0][2] . $val[1];
}

echo myfun4(["maung maung","aung aung","zaw zaw"]," is my elder brothers","Mr."); // Mr.zaw zaw is my elder brothers

echo "<br/>";


function myfun5(string $name,int ...$age):string{
    return "${name} is ${age[0]} years old.";
}

echo myfun5("su su",25); // su su is 25 years old.


function myfun6(int ...$numbers):int{
    return array_sum($numbers);
}

echo myfun6(1,2,3); //6


echo "<hr/>";



// => null coalescing operator()

function myfun7(...$val){

    echo $val[1] ? "Valid Data" : "No data";
    echo "<br/>";

    echo $val[1] ?? "No data";
    echo "<br/>";

}

myfun7("Hello World","Dream World"); // Valid Data Dream World
myfun7("Hello World"); // No data  No data 

echo "<hr/>";



?>
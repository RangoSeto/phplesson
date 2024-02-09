<?php

// PHP Loops

// for
// foreach
// while
// do...while

$colorones = ["red","green","blue","white","black","key","pink"]; //indexed array

var_dump($colorones);
echo "<br/>";
echo count($colorones);
echo "<br/>";
$coloroneskey = array_keys($colorones);
echo $coloroneskey; //Array
echo "<br/>";
var_dump($coloroneskey);
echo "<br/>";
echo "<br/>";

// for loop
// for(statement1;statement2;statement3){
//     code to executed;
// }



// foreach loop

// foreach(mainarray as value){
//     code to be executed;
// }

// foreach(mainarray as key=>value){
//     code to be executed;
// }



// while loop

// start

// while(condition is true){
//     code to be executed;
//     inn or dec
// }




// do...while loop

// start
// do{
//     code to be executed;
//     inc or dec
// }while(condition is true);




for($i = 0; $i < count($colorones); $i++){
    // echo "$i";
    // echo "<br/>";

    // echo "This is indexed array or manual array by forloop = index key is ". $i . "and value is ". $colorones[$i] . "<br/>";

    echo "This is indexed array or manual array by forloop = index key is ". $coloroneskey[$i] . "and value is ". $colorones[$i] . "<br/>";
} 

echo "<hr/>";

// foreach($colorones as $colorone){
//     echo "This is indexed array or manual array by foreach = ". $colorone . "<br/>";
// }

foreach($colorones as $key=>$colorone){
    echo "This is indexed array or manual array by foreach = index key is ". $key . "and value is ". $colorone . "<br/>";
}


echo "<hr/>";


$x = 0;
while($x < count($colorones)){
    // echo $colorones[$x] . "<br/>";
    // $x++;

    // echo "This is indexed array or manual array by while = index key is ". $x . " and value is ". $colorones[$x] . "<br/>";
    echo "This is indexed array or manual array by while = index key is ". $coloroneskey[$x] . " and value is ". $colorones[$x] . "<br/>";
    $x++;

}

echo "<hr/>";

$y = 0;
do{
    // echo "This is indexed array by dowhile = index key is ". $y . " and value is ". $colorones[$y] . "<br/>";
    echo "This is indexed array by dowhile = index key is ". $coloroneskey[$y] . " and value is ". $colorones[$y] . "<br/>";
    $y++;
}while($y < count($colorones));







echo "<hr/>";

$posts = [
    "postone"=>"this is news post one",
    "posttwo"=>"this is news post two",
    "postthree"=>"this is news post three",
    "postfour"=>"this is news post four",
]; // Associative Array

$postskey = array_keys($posts); //keyname တွေရမှာ
// var_dump($postskey);


// Associative arr ကိုပြန်ထုတ်ရင် array_keys() နဲ့ပြန်ထုတ်ရမယ်

for($x = 0; $x < count($posts); $x++){
    // echo "$x";
    // echo "<br/>";

    echo "This is Associative array by forloop = key is ". $postskey[$x] . " and value is ". $posts[$postskey[$x]] . "<br/>";
}

echo "<hr/>";

foreach($posts as $key=>$post){
    echo "This is Associative array by foreach = key is ". $key . " and value is ". $post . "<br/>";
}


echo "<hr/>";

$x = 0;
while($x < count($posts)){
    echo "This is Associative array by while = key is ". $postskey[$x] . " and value is ". $posts[$postskey[$x]] . "<br/>";
    $x++;
}


echo "<hr/>";

$y = 0;
do{
    echo "This is Associative array by dowhile = key is ". $postskey[$y] . " and value is ". $posts[$postskey[$y]] . "<br/>";
    $y++;
}while($y < count($posts));








echo "<hr/>";


$employees = [
    ["name"=>"Aung Aung","gender"=>"Male"],
    ["name"=>"Su Su","gender"=>"Female"],
    ["name"=>"Nu Nu","gender"=>"Female"],
    ["name"=>"Kyaw Kyaw","gender"=>"Male"],
    ["name"=>"Tun Tun","gender"=>"Male"],
]; //Multidimensional Array

$employees[0]["name"];

$employeeskey = array_keys($employees);
// var_dump($employeeskey);

// remove cover first array (multi array)
for($k = 0; $k < count($employees); $k++){
    $newkey = array_keys($employees[$employeeskey[$k]]);
    // var_dump($newkey);
    // remove cover second array (associative arr)
    for($j = 0; $j < count($newkey); $j++){
        var_dump($employees[$k][$newkey[$j]]);

        echo "This is Multidimensional array by forloop = key is ". $newkey[$j] . " and value is ". $employees[$k][$newkey[$j]] . "<br/>";

    }

}

echo "<hr/>";

foreach($employees as $index=>$employee){
    // echo employee;

    foreach($employee as $key=>$value){
        // echo $value;

        echo "This is Multidimensional array by foreach = key is ". $key . " and value is ". $value . "<br/>";
    }
}

echo "<hr/>";



$x = 0;
$key = array_keys($employees);
while($x < count($employees)){
    // echo $x;

    $newkey = array_keys($employees[$key[$x]]);

    $y = 0;
    while($y < count($newkey)){
        echo "This is Multidimensional array by while = key is ". $newkey[$y] . " and value is ". $employees[$x][$newkey[$y]] . "<br/>";

        $y++;
    }
    $x++;
}


echo "<hr/>";


$g = 0;
$key = array_keys($employees);

do{

    $newkey = array_keys($employees[$key[$g]]);

    $h = 0;
    do{
        echo "This is Multidimensional array by dowhile = key is ". $newkey[$h] . " and value is ". $employees[$g][$newkey[$h]] . "<br/>";
        $h++;
    }while($h < count($newkey));

    $g++;

}while($g < count($employees));




?>
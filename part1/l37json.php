<!-- data တွေ၁ခုနဲ့၁ခု transfer လုပ်ဖို့သုံးရင် xlm,json တွေကိုသုံးတယ် -->
<!-- json မှာ key, value ၂ခုလုံး string("") ဖြစ်ရမယ် -->

<?php

// json_encode(array);

// json_decode(array);
// json_decode(array,true); //default = false(ဘာမှမပါတာ false)


// can't
$colors = ["red","green","blue"];
var_dump($colors);

$mycolors =json_encode($colors);
echo "<br/>";
echo ($mycolors);
echo "<br/>";
var_dump($mycolors);

// -----------------------------------------

$students = ["name"=>"aung aung","age"=>25,"city"=>"yangon"];
echo "<pre>".print_r($students,true)."</pre>";
echo $students['name']."<br/>";
echo $students['age']."<br/>";
echo $students['city']."<br/>";

$studentsen = json_encode($students);
echo $studentsen;

// can't print
// echo $studentsen["name"];
// echo $studentsen["age"];
// echo $studentsen["city"];


echo "<hr/>";


// =>Decode by single parameter

$students = '{"name":"aung aung","age":25,"city":"yangon"}';
$studentsde = json_decode($students);

echo "<pre>".print_r($studentsde,true)."</pre>"; //stdClass Object နဲ့ထွက်

// can't print(arr ပေမယ့် သူက object ဖြစ်နေလို့ obj ထုတ်သလိုပဲထုတ်ပေးမှရမယ် arrလိုထုတ်ပေးလို့မရ)
// echo $studentsde["name"];
// echo $studentsde["age"];
// echo $studentsde["city"];

// can print (-> object operator) //obj တွေကိုခေါ်ချင်ရင်ဒီလိုခေါ်ရမယ်
echo $studentsde->name ."<br/>";
echo $studentsde->age ."<br/>";
echo $studentsde->city ."<br/>";

foreach($studentsde as $key=>$value){
    echo $key . " is " .$value . "<br/>";
}



// =>Decode by multi parameter

$students = '{"name":"aung aung","age":25,"city":"yangon"}';
$studentsde = json_decode($students,true); // true နဲ့ဆို array အဖြစ်ထွက်လာမယ် arrayလိုပြန်ထုတ်, ဘာမှမပါရင်က false(default)(objectနဲ့ထွက်)

echo "<pre>".print_r($studentsde,true)."</pre>"; // Array နဲ့ထွက်

// can print
echo $studentsde["name"];
echo $studentsde["age"];
echo $studentsde["city"];

// can't print
// echo $studentsde->name ."<br/>";
// echo $studentsde->age ."<br/>";
// echo $studentsde->city ."<br/>";

?>



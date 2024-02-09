<?php

ini_set('display_errors',1);

function mycolor($col){

    if($col !== "red"){
        throw new Exception("I hate $col color"); // ဒါဖြစ်ရင် pageပါ down အဲ့ကြောင့် ini_setသုံးတာ
    }

    return "Yeah! my fav color is $col";

}

echo mycolor("red");

echo "<hr/>";


function mynum($base,$power){
    
    if($power > 3){
        throw new Exception("We don't allow over $power");
    }

    $result = pow($base,$power);
    return $result;

}

echo mynum(2,3);

echo "<hr/>";

// =>try..catch Statement (ညင်ညင်သာသာဖြစ်အောင် error ဖမ်းတာ pageကြီးပါdownမသွားပါ)

// try{
//     code to be executed
// }catch(Exception $e){
//     code to be executed
// }


function mycolour($col){

    if($col !== "red"){
        throw new Exception("I hate $col color.");
    }

    return "Yeah! my fav color is $col.";
}

echo "<hr/>";

// try{
//     echo mycolour("black");
// }catch(Exception $e){
//     echo "You should not try with this color.";
// }

try{
    echo mycolour("black");
}catch(Exception $e){
    echo "You should not try with this color." . $e->getMessage();
    echo $e->getMessage();
}


echo "<hr/>";


function mynumber($base,$power){
    if($power > 5){
        throw new Exception("We don't allow over $power");
    }

    $result = pow($base,$power);
    return $result;
}

try{
    echo mynumber(3,6);
}catch(Exception $e){
    echo "You should not over. " . $e->getMessage();
}

echo "<hr/>";




// =>try...catch...finally Statement (finallyက try,catch တွေမှန်မှန်မှားမှားသူကတော့အလုပ်လုပ်လုပ်သွားမှာ)

// try{

// }catch(Exception $e){

// }finally{
//     code that always runs regardless of weather or not
// }


function myval($base,$power){
    if($power > 3){
        throw new Exception("We don't allow over $power");
    }

    $result = pow($base,$power);
    return $result;
}

// try{
//     echo myval(3,5);
// }catch(Exception $e){
//     echo "You should not over. " . $e->getMessage();
// }finally{
//     echo "<br/>";
//     echo "Hay there! I am joker";
// }


try{
    echo myval(3,5);
}finally{
    echo "<br/>";
    echo "Hay there! I am joker";
}
//catchမပါလို့တော့ရပေမယ့် errorတက်ရင်ဖမ်းမယ့်ဟာမရှိတော့လို့ errorကြမ်းကြမ်းကြီး(system error) ကြီးထွက်လာမယ်

echo "<hr/>";





?>
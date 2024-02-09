<?php

function funone($val1,$val2){
    echo __FUNCTION__," values are $val1 and $val2 <br/>";
}

class Hifi{

    function funtwo($val1,$val2){
        echo __METHOD__," values are $val1 and $val2 <br/>";
    }

}

funone(10,20);

// call_user_func_array(callback,array)
call_user_func_array("funone",[100,200]); // funone values are 10 and 20
call_user_func_array("funone",array(1000,2000));


$obj = new Hifi();
$obj->funtwo(30,40);
// call_user_func_array([class,method],array)
call_user_func_array([$obj,"funtwo"],[300,400]); // Hifi::funtwo values are 300 and 400
call_user_func_array(array($obj,"funtwo"),array(3000,4000));



?>
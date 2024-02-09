<?php

// Note : Interface can't include "body"
//Note : Modifier must be "public" In interface, cuz we need to override in class
// To implement an interface, a class must use the implements keyword.
//A class must use the "implements" keyword. 
// A class that implements an interface myst implement all of the interface's methods.
// Can't contain propeerties/common method(ပြည့်စုံနေတဲံmethod) but constant properties can.

interface article{

    const CAPTION = "This is new article for SPORT";

    public function create();
    public function read($id);
    public function update($id,$title);
    public function delete();

}


class myinterface implements article{

    public function setid(){
        echo "I am setid . <br/>";
    }

    public function create(){
        echo "I am create article. ".self::CAPTION." <br/>";
    }

    public function read($id){
        echo "I am read article. ID is ${id} <br/>";
    }

    public function update($id,$title){
        echo "I am update article. ID is ${id} and Title is ${title} <br/>";
    }

    public function delete(){
        // echo "I am delete article. ID is ${id} <br/>";
    }

}


echo "This is Interface <br/>";

$obj = new myinterface();
$obj->setid();
$obj->create();
$obj->read(10);
$obj->update(10,"This is article 10");
$obj->delete();

echo "<hr/>";



?>
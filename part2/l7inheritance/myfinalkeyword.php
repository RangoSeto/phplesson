<?php

// Note:: 'final' keyword is used to restrice method and class not to be share with child class

// final class myfinalkeyword // ဒီလိုရေးလိုက်ရင် ဒီ classကြီးကို inherite လုပ်လို့မရတော့ဘူး ယူသုံးလို့မရတော့ဘူး
class myfinalkeyword{

    protected $fullname = "Nandar";
    public $city = "Mandalay";
    public $email = "nandar@gmail.com";
    public $password = "123456";

    public function getaccess(){
        echo "This is site login : email is $this->email & password is $this->password. <br/>";
    }

    // final ပေးလိုက်ရင် ဒီmethodကို overwrite လုပ်လို့မရတော့ဘူး ခေါ်သုံးလို့တော့ရမယ်
    final public function getinfo(){
        echo "Name is $this->fullname & city is $this->city . <br/>";
    }

}

class developerlogin extends myfinalkeyword{
    public function githublogin(){
        echo "This is github login : email is $this->email . Profile name is $this->fullname. <br/>";
    }

    // public function getinfo(){
    //     echo "My Full Name is $this->fullname & current city is $this->city . <br/>";
    // }

}

echo "This is Final Keyword <br/>";

$obj1 = new myfinalkeyword();
$obj1->getaccess();
$obj1->getinfo();

echo "<hr/>";

$obj2 = new developerlogin();
$obj2->githublogin();
$obj2->getinfo();


?>
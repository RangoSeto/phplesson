<?php

class constantvsproperties{
    
    const ARTICLE = "This is new article for SPORT";
    const TOPIC = "This is new topic for SPORT";
    public $post = "This is new post for SPORT"; //public,private,protectedပေါ်မူတည်ပြီးအဖြေပြောင်းလဲနိုင်
    // private $post = "This is new post for SPORT"; //sub class ကနေပြန်ခေါ်ရင် ထွက်လာရင်အဖြေကoverwriteမလုပ်ပေး
    // protected $post = "This is new post for SPORT"; //Publicနဲ့တူ overwriteလုပ်ပြီးပေး

    public function contentone(){
        echo self::ARTICLE;
        echo "<br/>";
        echo static::TOPIC;
        echo "<br/>";
        echo $this->post;
        echo "<br/>";
    }

}

class baby extends constantvsproperties{
    const ARTICLE = "This is new article for POTILICAL";
    const TOPIC = "This is new topic for POTILICAL";
    public $post = "This is new post for POTILICAL";

    public function contenttwo(){
        echo self::ARTICLE;
        echo "<br/>";
        echo static::TOPIC;
        echo "<br/>";
        echo $this->post;
        echo "<br/>";
    }
}


echo "This is Constant Vs Properties" . "<br/>";

$obj = new constantvsproperties();
$obj->contentone();
// This is new article for SPORT
// This is new topic for SPORT
// This is new post for SPORT


echo "<br/>";

$bb = new baby();
$bb->contentone();
// This is new article for SPORT
// This is new topic for POTILICAL
// This is new post for POTILICAL


echo "<br/>";

$bb->contenttwo();
// This is new article for POTILICAL
// This is new topic for POTILICAL
// This is new post for POTILICAL



echo "<hr/>";





?>
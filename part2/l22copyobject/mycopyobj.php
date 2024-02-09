<?php

class news{
    public $article;

    public function __construct($val){
        $this->article = $val;
    }
}

function copyobject(news $obj1, news $obj2){
    $obj2->article = $obj1->article;
}

echo "This is Copy Objects <br/>";

$news1 = new news("This is the first article 1");
$news2 = new news("This is the first article 2");

echo $news1->article; // This is the first article 1
echo "<br/>";
echo $news2->article; // This is the first article 2

echo "<br/>";

copyobject($news1,$news2);

echo $news2->article;  // This is the first article 1

echo "<hr/>";



?>

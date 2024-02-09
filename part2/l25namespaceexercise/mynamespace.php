<?php

// echo __DIR__; // /var/www/html/phpbatch3/part2/l25namespaceexercise
// echo "<br/>";


use gallery\slideshow as viewer;
use gallery\slideshow\picture;


spl_autoload_register(function($classname){

    echo "Loading the class = {$classname} <br/>";

    $file = str_replace("\\","/",$classname) . ".php";
    // echo $file; // gallery/photo.php

    if(file_exists($file)){
        // require_once($file); // gallery/photo.php
        require_once(__DIR__."/".$file); // /var/www/html/phpbatch3/part2/l25namespaceexercise/gallery/photo.php
    }else{
        echo "No File Exists";
    }

});

$music = new music();
$music->play();

$video = new video();
$video->play();

$photo = new gallery\photo();
$photo->play();

$portrait = new gallery\animateshow\portrait();
$portrait->play();

$image = new gallery\slideshow\image();
$portrait->play();

$image = new viewer\image();
$image->play();

$picture = new picture();
$picture->play();


?>
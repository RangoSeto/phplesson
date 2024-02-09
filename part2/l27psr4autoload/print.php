<?php

// psrf4autoload သုံးဖို့ .json file 1ခုရှိရမယ် name = composer.json
// autoload can use only for class object

// autoload သုံးရင် namespace ထည့်ကိုထည့်ပေးရမယ်


require_once("./vendor/autoload.php");

use app\music;
use app\video;
use app\gallery\photo;
use app\gallery\animateshow\portrait;
use app\gallery\slideshow as slider;
use app\gallery\slideshow\picture;
use app\Models\Article;
use config\auth;

$music = new music();
$music->play();

$video = new video();
$video->play();

$photo = new photo();
$photo->play();

$portrait = new portrait();
$portrait->play();

$image = new slider\image();
$image->play();

$picture = new picture();
$picture->play();

$article = new Article();
$article->index();

$auth = new auth();
$auth->login();

?>

<!-- composer dump-autoloads -->
<!-- composer dump-autoload -o --> <!-- json file ပြင်တိုင်း restart လုပ်ရမှာ -o  -->

<?php

    // Load Config 
    require_once 'config/config.php';

    // Import Libraries
    // require_once 'libraries/Controller.php'; // (import = ./ က ဟိုဘက်ကပြန်ချိတ်ရင် ဒါကerrorပေးမှာ )
    // require_once 'libraries/Core.php';
    // require_once 'libraries/Database.php';


    //Load Libraries
    spl_autoload_register(function($classname){
        require_once('libraries/'.$classname.'.php');
    });
    

?>
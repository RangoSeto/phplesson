<?php

// echo "I am PHP browser redirection";

// header("Location:https://google.com");
// exit;

$query= $_SERVER['QUERY_STRING']; // QUERY_STRINGက http://localhost:8012/phpbatch3/part1/l57redirection.php?google ဆိုရင် googleကိုယူတာ

switch($query){
    case "google":
        header("Location:https://google.com");
        exit;
        break;
    case "linkedin":
        header("Location:https://linkedin.com");
        exit;
        break;
    case "cookies":
        header("Location:l55cookies.php");
        exit;
        break;
    default:
        echo "We do not have any redirection for your query.";
        break;
}

?>
<?php

// Note : Session store on Server (Global variable) (ရှေ့ကfrontendမှာသုံးတဲ့ local storage,sessin storageနဲ့မတူ ဒါက backendကသုံးတဲ့ဟာ)
//cookiesလို browser ပိတ်တာနဲ့ dataပျက်

// super global var မလို့ဘယ်ကခေါ်ခေါ်ရတယ် ခေါ်ချင်ရင်တော့ session_start လုပ်ထားဖို့လို
// session စအသုံးပြုမယ်ဆို startလုပ်ထားဖို့လိုတယ်
session_start();

if(isset($_SESSION['idxcount'])){
    $_SESSION['idxcount']++; //idxcountဆိုတဲ့ဟာရှိပြီးသားဆို 1တိုးသွား
}else{
    $_SESSION['idxcount'] = 1; //မရှိရင်ထည့်မယ်
}

echo "IDX count = " . $_SESSION['idxcount'];


?>


<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
</head>
<body>
    <ul>
        <li><a href="./l56session.php">Set Session</a></li>
        <li><a href="./l56destroysession.php" target="_blank">Delete Session</a></li>
    </ul>
</body>
</html>


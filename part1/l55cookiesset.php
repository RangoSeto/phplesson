<?php

// => Syntax (Note:: gone after browser end) (tabပိတ်ရုံနဲ့တော့မပျက်သွား)
// setcookie('cookiename','value');

// setcookie('mmk','Myanmar Kyat');
// echo "Cookies Set Successfully";



// => Syntax (Note:: exipire date သတ်မှတ်ပေးတာ)
// setcookie('cookiename','value',expire);

// setcookie('mmk','Myanmar Kyat',time()+60*60*24*3); //3days //3ရက်နေပျက်မှာ
setcookie('mmk','Myanmar Kyat',time()+(86400*5)); //5days
// echo "Cookies Set Successfully";



?>
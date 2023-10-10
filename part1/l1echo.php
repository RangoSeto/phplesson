<?php
// phpinfo();

echo "Hello Myanmar <br/>";
echo 'Hello Thailand <br/>';
echo ("Hello Indonesia <br/>");
echo ('Hello Srilanka <hr/>');

echo "Hello Myanmar",'I Love Myanmar';
// echo ("Hello Thailand",'Hello Srilanka'); //error

echo "<hr/>";

print "Hello Philippine <br/>";
// print "Hello Philippine",'Hello Thailand'; //error
print ("Hello Thailand");
// print ('Hello Srilanka','Hello Indonesia'); //error

echo "<hr/>";

echo 'hay'; // php မှာ ``သုံးလို့မရ
echo '<br/>';
echo 500;
echo '<br/>';
echo (300);
echo '<br/>';
echo 456.23;
echo '<br/>';
echo true; //result = 1;
echo '<br/>';
echo false; //result = empty
echo '<br/>';
echo null; //result = empty
echo '<br/>';
// echo underfined; //error


// Special Escape Character (\)

echo "He's my brother";
echo '<br/>';
print "She's my sister";
echo '<br/>';

echo 'He\'s my father';
echo '<br/>';
print 'She\'s my sister';
echo '<br/>';

echo 'He\'s my brother, he\'s a doctor. ';
echo '<br/>';
print "She\"s my sister, she\"s a doctor.";
echo '<br/>';

// "" ထဲမှာ '' ရေးရင် \ ခံစရာမလို string ဖြစ်ပြီးသားမလို့ထည့်ရင်လည်း \ ကြီးပါလာမယ်	

?>




<!-- 
linux မှာphp ဖွင့်နည်း

=>Method 1
cd /var/www/
code .
localhost

=>Method2
php -S localhost:8000 -t foldername
localhost:8000/filename.php //ဖွင့်ရင်ဒီလိုဖွင့်(terminalတော့မပိတ်ရ)

 -->
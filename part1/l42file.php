<?php

// text file သွားတည်ဆောက်တာ
// log file တွေကို file နဲ့သိမ်းတဲ့နေရာမှာသုံးတာ 


// echo readfile("l43file.txt"); // readfile() - file ကိုသွားဖတ်တာ စာလုံးရဲ့အရေအတွက်ကိုလည်းဖော်ပြနေမှာ
// echo filesize("l43file.txt"); //// စာလုံးရဲ့အရေအတွက်ကိုပဲဖော်ပြနေမှာ



// $fileopen = fopen("l43file.txt","r"); //file ကိုဖွငိ့ဖွင့်ဖို့ရှိလားကြည့်တာ r=read
// if($fileopen){
//     // echo "OKI";

//     $fileread = fread($fileopen,filesize("l43file.txt"));
//     fclose($fileopen);

//     echo $fileread;
// }else{
//     echo "File Not Found !!!";
// }




// For Linux(Give Permission) write access အတွက် permission ပေးတဲ့ code
// sudo chmod 777 -R /var/www/html
// sudo chmod 775 /var/www/html

// linux မှာသုံးလို့မရ write access မရှိလို့ (သုံးချင်ရင် permissionပေးရမယ်)
// $fileopen = fopen("l44file.txt","w");
// if($fileopen){
    
//     fwrite($fileopen,"Hello guy!! I created new file");
//     fclose($fileopen);

//     echo "File Wrote";
// }else{
//     echo "File Not Found !!!";
// }

// (or)


// write မှာက fileရှိရင် overwirte လုပ်မယ် မရှိရင်တည်ဆောက်မယ်

// $fileopen = fopen("l44file.txt","w");
// if($fileopen){
    
//     fwrite($fileopen,"Hello guy!! I created new file");

//     $fileopen = fopen("l44file.txt","r");
//     $fileread = fread($fileopen,filesize("l44file.txt"));
    
//     fclose($fileopen);

//     echo $fileread;
// }else{
//     echo "File Not Found !!!";
// }




// Note :: "x" write only, create a new file. return FALSE if file already exists.
// ၁ခေါက်ပဲတည်ဆောက်ပြီးရေးသွားမယ် နောက်၁ခါအလုပ်မလုပ်တော့ဘူး (အစထဲကဒီ file ရှိနေလည်းမရ) (ဒီ file ကိုပဲ read,writeထပ်လာလုပ်လို့မရတော့)

// $fileopen = fopen("l44file.txt","x");
// if($fileopen){
//     fwrite($fileopen,"Hello guy!! I created new file by using x.");
// }else{
//     echo "File Not Found !!!";
// }




// Note : "c" Write Only
// Note : "c+" Read/Write

// $fileopen = fopen("l46file.txt","c");
// if($fileopen){
    
//     fwrite($fileopen,"I created a new file");

//     $fileopen = fopen("l46file.txt","c+");
//     $fileread = fread($fileopen,filesize("l44file.txt"));
    
//     fclose($fileopen);

//     echo $fileread;
// }else{
//     echo "File Not Found !!!";
// }




// $fileopen = fopen("l47file.txt","w");
// if($fileopen){
    
//     $message = "Welcome to our class. \n"; // \n - new line  
//     fwrite($fileopen,$message);
//     $message = "Thank you for using php file system.";
//     fwrite($fileopen,$message);
//     // စာ၂ကြောင်းလုံးဝင်သွားမှာ၂ခါရေးသလိုဖြစ်သွားလို့ ( no overwrite)

//     $fileopen = fopen("l47file.txt","r");
//     $fileread = fread($fileopen,filesize("l47file.txt"));
    
//     fclose($fileopen);

//     echo $fileread;
// }else{
//     echo "File Not Found !!!";
// }



// =>Append // ရှိပီးသားဟာကိုပဲထပ်ထပ်ပြီးထည့်သွားမယ် append

// $fileopen = fopen("l48file.txt","a");
// if($fileopen){
    
//     $message = "Welcome to our class. \n";
//     fwrite($fileopen,$message);
//     $message = "Thank you for using php file system. \n";
//     fwrite($fileopen,$message);
//     // စာ၂ကြောင်းလုံးဝင်သွားမှာ၂ခါရေးသလိုဖြစ်သွားလို့ ( no overwrite)

//     $fileopen = fopen("l48file.txt","r");
//     $fileread = fread($fileopen,filesize("l48file.txt"));
    
//     fclose($fileopen);

//     echo $fileread;
// }else{
//     echo "File Not Found !!!";
// }

// ------------------------------------------------------------------------------


// =>Other File Functions

// file_get_contents() = Read 
// file_put_contents() = write 
// file_exists() = check file exist or not 
// copy() = copies a file 
// rename() = renames a file 
// unlink() = deletes a file




// echo file_get_contents("l43file.txt"); // အဲ့ဒီ့fileကရှိကိုရှိနေရမယ် လွယ်လွယ်လေး file ဖတ်လို့ရ

// $existingfile = "l43file.txt";
// $newfile = "l49file.txt";
// $message = file_get_contents($existingfile);
// $message .= "\n Thank you for using php file system. \n";
// file_put_contents($newfile,$message) or die("Unable to open file");

// l43 ထဲကစာကိုယူမယ်, စာထပ်ထည့်မယ်, ပြီးရင်အဲ့စာကို l49fileအသစ်၁ခုတည်ဆောက်ပြီးအဲ့ထဲစာထည့်သွားမယ်





// $existingfile = "l43file.txt";
// $newfile = "l50file.txt";

// if(file_exists($existingfile)){
//     $message = file_get_contents($existingfile);
//     $message .= "\n Thank you for using php file system. \n";
//     file_put_contents($newfile,$message) or die("Unable to open file");
// }else{
//     echo "File Not Found";
// }



// $existingfile = "l43file.txt";
// $newfile = "l50file.txt";

// if(is_file($existingfile)){
//     $message = file_get_contents($existingfile);
//     $message .= "\n Thank you for using php file system. \n";
//     file_put_contents($newfile,$message) or die("Unable to open file");
// }else{
//     echo "File Not Found";
// }

// fileရှိသလားကိုက file_exists() နဲ့ရော is_file()နဲ့ရောစစ်လို့ရ




// =>copy()
// $file = "l44file.txt";
// copy($file,"l51file.txt");
// echo file_get_contents("l51file.txt");



// =>rename()
// $file = "l51file.txt";
// rename($file,"l52file.txt");
// echo file_get_contents("l52file.txt");




// =>unlink()
// $file = "l52file.txt";
// if(file_exists($file)){
//     unlink($file);
//     echo "File Delete Successfully";
// }else{
//     echo "File Not Found";
// }




// =>Show all .txt file //ကြိုက်တဲ့fileသီးသန့်ထုတ်ကြည့်လို့ရ *.php , *.png
// echo "<pre>".print_r(glob("*.txt"),true)."</pre>";

// =>Show all file
// echo "<pre>".print_r(glob("*.*"),true)."</pre>";

// echo "<pre>".print_r(glob("l46file.txt"),true)."</pre>"; //l46file ပဲပြ
// echo "<pre>".print_r(glob("l46file.*"),true)."</pre>"; //l46file name ပေးထားတာအကုန်ပြမယ်





// 26PHP



?>
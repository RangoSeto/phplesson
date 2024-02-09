<?php

interface encrypt{

    public function setpasscode($plaintext);
    public function passworddef();
    public function passwordbcr();
    public function passwordvry();
    public function passwordrehash();


    public function strongpassword();

    public function getciphermethod();
    public function customencrypt();
    public function customdecrypt();


    public function gethashingalgorithm();
    public function customstrongencrypt();
    public function customstrongdecrypt();


}

// password_hash(string,mixed)

// (password က၁ခါ refresh လုပ်တိုင်း၁ခါပြောင်းနေမှာ) 
// keywords 
// PASSWORD_DEFAULT
// PASSWORD_BCRYPT

class myencryption implements encrypt{

    private $passcode;

    public function setpasscode($plaintext){
        $this->passcode = $plaintext;
    }

    public function passworddef(){
        $newpasscode = password_hash($this->passcode,PASSWORD_DEFAULT);
        echo "Before encrypt = $this->passcode <br/> And after encrypt = $newpasscode <br/>";
        echo strlen($newpasscode)."<br/>"; //60
    }

    public function passwordbcr(){
        $newpasscode = password_hash($this->passcode,PASSWORD_BCRYPT);
        echo "Before encrypt = $this->passcode <br/> And after encrypt = $newpasscode <br/>";
        echo strlen($newpasscode)."<br/>"; //60
    }

    public function passwordvry(){
        // => Decryption
        // password_verify(string,hash); (stringနဲ့encryptလုပ်ထားတာကိုတိုက်စစ်ပေးနိုင်တာ) encကအမြဲပြောင်းနေပေမယ့်လည်းအဆင်ပြေတယ်

        $plaintextone = "password123";
        $enccode = password_hash($plaintextone,PASSWORD_DEFAULT);
        echo "password hash with PASSWORD_DEFAULT = ". $enccode;
        echo "<br/>";

        $plaintexttwo = "password12345";
        $enccodetwo = password_hash($plaintexttwo,PASSWORD_BCRYPT);
        echo "password hash with PASSWORD_BCRYPT = ". $enccodetwo;
        echo "<br/>";

        $verify = password_verify($plaintextone,$enccode);

        if($verify){
            echo "OKI";
        }else{
            echo "Failed";
        }
    }

    public function passwordrehash(){
        // password_hash(string,mixed,optional)
        // keywords 
        // PASSWORD_DEFAULT
        // PASSWORD_BCRYPT

        $plaintext = "password123";
        $enccode = password_hash($plaintext,PASSWORD_DEFAULT);
        echo "Password hash with PASSWORD_DEFAULT = ".$enccode."<br/>";

        if(password_needs_rehash($enccode,PASSWORD_DEFAULT,["cost"=>12])){
            $rehashed = password_hash($plaintext,PASSWORD_DEFAULT,["cost"=>12]);
            echo $rehashed;
            echo strlen($rehashed)."<br/>"; //60
        }else{
            echo "No need to rehash";
        }

    // default hash လုပ်ရင် 10နဲ့လုပ်တာ $2y$10... အဲ့ဒါကို 12 တို့ဆက် cryptလုပ်ချင်ရင်
    }




    public function passwordmd5(){

        // Message-Digest (md)
        // => md5(string,raw)
        // NOTE :: Raw Optional (TRUE,true,FALSE,false)
        // TRUE/true = Raw 16 characters binary format 
        // FALSE/false === DEFAULT. 32 character hax number

        $passcode = "howareyou";
        echo "Before encrypt with md5 = ".$passcode."<br/>";
        echo "After encrypt with md5 = ".md5($passcode)."<br/>";
        echo "After encrypt with md5 by FALSE = ".md5($passcode,FALSE)."<br/>";
        echo "After encrypt with md5 by TRUE = ".md5($passcode,TRUE)."<br/>";


        $getpassword = "�q#��h9���*(0 �"; //ဒီတိုင်းဆီုမရmd5($passcode,TRUE) ဒီလိုဆိုရင်တော့ရတယ်

        if($getpassword === md5($passcode)){
            echo "Password Match with md5 32 chars hax number";
        }elseif($getpassword === md5($passcode,TRUE)){
            echo "Password Match with md5 16 raw chars binary format"; //can't match cuz it's binary
        }else{
            echo "Password don't match";
        }
        
    }

    public function passwordsha1(){

        // Secure Hash Algorithm 
        // => sha1(string,raw)
        // NOTE :: Raw Optional (TRUE,true,FALSE,false)
        // TRUE/true = Raw 20 characters binary format 
        // FALSE/false === DEFAULT. 40 character hax number

        $passcode = "goodluck";
        echo "Before encrypt with sha1 = ".$passcode."<br/>";
        echo "After encrypt with sha1 = ".sha1($passcode)."<br/>";
        echo "After encrypt with sha1 by FALSE = ".sha1($passcode,FALSE)."<br/>";
        echo "After encrypt with sha1 by TRUE = ".sha1($passcode,TRUE)."<br/>";


        $getpassword = "748ad6ccd32e4e52718445bb1cadc01eb08a0df6";

        if($getpassword === sha1($passcode)){
            echo "Password Match with sha1 40 chars hax number";
        }elseif($getpassword === sha1($passcode,TRUE)){
            echo "Password Match with sha1 20 raw chars binary format"; //can't match if you are copy to the screen output. with code sha() is oki
        }else{
            echo "Password don't match";
        }

    }


    public function passwordcrypt(){

        // =>crypt(string,key)

        $passcode = "ilovemyjob";
        $cryptkey = "12345abcdef";
        echo "Before encrypt with crypt = ".$passcode."<br/>";
        echo "After encrypt with crypt = ".crypt($passcode,$cryptkey)."<br/>";
        echo strlen(crypt($passcode,$cryptkey)); //13 char length

        $getpassword = "12HfyUaX52St6";

        if($getpassword === crypt($passcode,$cryptkey)){
            echo "Password Match";
        }else{
            echo "Password do not match";
        }


    }

    public function strongpassword(){

        $passcode = 'ilovemyjob';

        $newpassword = md5($passcode);
        $newpassword = sha1($newpassword);
        $newpassword = crypt($newpassword,$newpassword);

        echo "Before encrypt = ".$passcode."<br/>";
        echo "After encrypt = ".$newpassword."<br/>"; //ဒီမှာက md5 ကအရင်လုပ်တာ
        echo "After encrypt by single line = ".md5(sha1(crypt($passcode,$passcode)))."<br/>"; // ဒါက cryptကအရင်လုပ်တော့ အဲ့မှာထဲကပြောင်းပြန်

        $getpassword = "b87BFK8O";

        if($getpassword === md5(sha1(crypt($passcode,$passcode)))){
            echo "Password Match";
        }else{
            echo "Password do not Match";
        }


    }


    public function getciphermethod(){
        $ciphers = openssl_get_cipher_methods();
        echo "<pre>".print_r($ciphers,true)."</pre>";
    }

    public function customencrypt(){

        // openssl_encrypt(p,c,p,o,iv);
        // openssl_encrypt(plaintext,cipher,passphrase,options,initalization vector);

        $plaintext = "ilovemyfriend";

        echo "Before Encrypt = ".$plaintext."<br/>";

        // cipher method 
        $cipher = "aes-128-ctr";

        // passphrase (encryption key)
        $encryptionkey = "abcdefg12345";

        // options 
        $options = 0; //OPENSSL_ZERO_PADDING is equal to 0 ,OPENSSL_RAW_DATA is 1 (1 ဆို binayနဲ့ထွက်မှာမလို့ copyယူသုံးမရလို့အဆင်မပြေလို့မသုံးတာ)

        $iv = "12345678910"; //သူ့ကိုကွဲပြားအောင် Numberပဲပေးလိုက် passphrase လိုပဲ

        $finalencrypt = openssl_encrypt($plaintext,$cipher,$encryptionkey,$options,$iv);

        echo "After Encrypt = ". $finalencrypt . "<br/>";
        echo strlen($finalencrypt)."<br/>"; //20 (length က pwနဲ့ cipher method ပေါ်မူတည်ပြီးပြောင်းနိုင်)

    }

    public function customdecrypt(){
        
        // openssl_decrypt(e,c,p,o,iv);
        // openssl_decrypt(encrypt,cipher,passphrase,options,initalization vector);

        $encrypted = "p/3kpGqOTamzzTXhNw==";

        // cipher method 
        $cipher = "aes-128-ctr"; //decryptလုပ်ရင် အပေါ်က encrypt လုပ်ထားတာပဲပြန်သုံးပေးရမယ်

        // passphrase (encryption key)
        $encryptionkey = "abcdefg12345";

        // options 
        $options = 0; //enc တိုင်းတူရမယ်

        $iv = "12345678910";

        $finalencrypt = openssl_decrypt($encrypted,$cipher,$encryptionkey,$options,$iv);

        echo "After Decrypt = ". $finalencrypt . "<br/>";
        
    }


    // hashing algorithm က pw တွေ dynamit ဖြစ်အောင်လုပ်ရင်သုံးတာ
    public function gethashingalgorithm(){
        $hashalgorithms = hash_hmac_algos(); //keyed-hash message authentication code
        echo "<pre>".print_r($hashalgorithms,true)."</pre>";
    }
    public function customstrongencrypt(){
        // openssl_encrypt(p,c,p,o,iv)

        $plaintext = 'ilovemyfriend';
        echo "Before Encrypt = ". $plaintext."<br/>";

        $cipher = "aes-128-ctr";

        $encryptionkey = "abcdefg12345";

        $options = OPENSSL_ZERO_PADDING;

        $ivlen = openssl_cipher_iv_length($cipher); // is an artitrary number (ပျောက်သောက်num) (သူက cipherရဲ့lenကိုရေတွက်နေတာမဟုတ် အထဲက binaryရဲ့lenကိုရေတွက်နေတာ)
        echo $ivlen . "<br/>";
        $iv = openssl_random_pseudo_bytes($ivlen); // binary pseudoတွေထွက်လာမှာ (�C���ӈ��NRT) randomကျနေမှာ
        echo $iv . "<br/>";

        $hash = openssl_encrypt($plaintext,$cipher,$encryptionkey,$options,$iv);
        echo "$hash". "<br/>";//mUMMn1d74C0oNmFIuA== (random)

        // hash_hmac(a,h,p,b)
        // hash_hmac(algorithm,hash,passphrase,binary) //only use with true (for security and it doesn't store in databasae)
        $hmac = hash_hmac('sha256',$hash,$encryptionkey,true); // true = raw binary data, false=lower hash number
        echo $hmac . "<br/>";
        echo strlen($hmac) . "<br/>"; //32

        $filalencrypt = base64_encode($iv.$hmac.$hash);

        echo "After Encrypt = ".$filalencrypt. "<br/>";
        echo strlen($filalencrypt)."<br/>"; //92

    }
    public function customstrongdecrypt(){

        // openssl_decrypt(e,c,p,o,iv);

        $encrypted = base64_decode("lbnJvoxqY79WyWKQ5O3QNFFuU0viR2nCnOj5TdLFO5GPx8talq/sJf9bVk3fkNSPUTA1d0RIb3ppdnlkc3FXK2Z3PT0=");
        // echo $encrypted . "<br/>";

        $cipher = "aes-128-ctr";
        $encryptionkey = "abcdefg12345";

        $options = OPENSSL_ZERO_PADDING;

        $ivlen = openssl_cipher_iv_length($cipher);
        // echo $ivlen . "<br/>"; //16

                // substr(e,0)
                // substr(enctyped,start,end)
        $iv = substr($encrypted,0,$ivlen);
        echo $iv ."<br/>";

        $algolen = 32; // အပေါ်က သုံးထားတဲ့ algorithm(sha1) က length တိုင်းသုံးရမယ်
        $gethash = substr($encrypted,$ivlen+$algolen); //encrypted မှာ၃ခုပေါင်းထားလို့ hash ကိုပြန်ဖြေထုတ်
        echo $gethash . "<br/>"; // openssl_encrypt လုပ်ထားတာက hashမလို့ အဲ့ဒါယူရမှာ
        echo strlen($gethash) . "<br/>"; //20

        $finaldecrypt = openssl_decrypt($gethash,$cipher,$encryptionkey,$options,$iv); // openssl_encrypt လုပ်ထားတာက hashကို

        echo "After Decrypt = ". $finaldecrypt ."<br/>";

    }



}

// 19SD

echo "This is Encryption <br/>";

$obj = new myencryption();
$obj->setpasscode('password123');
$obj->passworddef();
$obj->passwordbcr();

echo "<hr/>";

$obj->passwordvry();
echo "<hr/>";


$obj->passwordrehash();
echo "<hr/>";


$obj->passwordmd5();
echo "<hr/>";


$obj->passwordsha1();
echo "<hr/>";


$obj->passwordcrypt();
echo "<hr/>";


$obj->strongpassword();
echo "<hr/>";


$obj->getciphermethod();
echo "<hr/>";

$obj->customencrypt();
$obj->customdecrypt();
echo "<hr/>";

$obj->gethashingalgorithm();
$obj->customstrongencrypt();
$obj->customstrongdecrypt();
echo "<hr/>";



?>

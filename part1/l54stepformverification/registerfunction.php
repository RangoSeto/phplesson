<?php

ini_set('display_errors',1);
// session_start();
require_once('./dbconnect.php');
require_once('./sessionconfig.php');


// sudo chmod 777 -R assets/ (assets folderကိုpermission ပေးတာ l45stepformverification ပတ်လမ်းကြောင်းအရင်သွား)

if($_SERVER['REQUEST_METHOD'] === "POST"){

    // echo "Hello";

    // if(isset($_POST['submit'])){
    //     echo "how are you.";
    // } submit btn က form အပြင်မှာရောက်နေလို့ ဒီဟာအလုပ်မလုပ်



    $getfirstname = textfilter($_POST['firstname']);
    $getlastname = textfilter($_POST['lastname']);
    $getemail = textfilter($_POST['email']);
    $getpassword = md5(textfilter($_POST['password']));
    $getdob = textfilter($_POST['dob']);
    $getphone = textfilter($_POST['phone']);
    $getaddress = textfilter($_POST['address']);
    $getnewsletter = textfilter($_POST['newsletter']);



    // echo $getfirstname;
    // echo $getlastname;
    // echo $getemail;
    // echo $getpassword;
    // echo $getdob;
    // echo $getphone;
    // echo $getaddress;
    

    if($getemail && $getpassword){

        try{
            $stmt = $conn->prepare("INSERT INTO users(profile,firstname,lastname,email,password,dob,phone,address,newsletter,documents) VALUE (:profile,:firstname,:lastname,:email,:password,:dob,:phone,:address,:newsletter,:documents)");
            $stmt->bindParam(":profile",$profile);
            $stmt->bindParam(":firstname",$firstname);
            $stmt->bindParam(":lastname",$lastname);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":password",$password);
            $stmt->bindParam(":dob",$dob);
            $stmt->bindParam(":phone",$phone);
            $stmt->bindParam(":address",$address);
            $stmt->bindParam(":newsletter",$newsletter);
            $stmt->bindParam(":documents",$documents);

            $countfiles = count($_FILES['profile']['name']);

            if($countfiles){

                for($x = 0; $x < $countfiles; $x++){

                    $uploaddir = "./assets/";
                    $filename = $_FILES['profile']['name'][$x];

                    // method 1 (စက်ထဲကရှိတဲ့ ပုံnameအတိုင်းထည့်တာ)
                    // $uploadfile = $uploaddir.basename($filename); // ./assets/dog1.jpg


                    // method 2 (nameတူနေရင်ထပ်မဝင်လို့ nameမတူအောင် nameကိုdynamicဖြစ်အောင် millsecondsရဲ့ဟာကိုပေးလိုက်တာ (random noနဲ့လည်းပေးလို့ရ))
                    // $gettype = explode('.',$filename); //['cutedog1','jpg'];

                    // $newfilename = round(microtime(true)).".".end($gettype); //1687517823.jpg
                    // $newfilename = round(microtime(true))."_".current($gettype).".".end($gettype); //1687517823_cutedog1.jpg

                    // $uploadfile = $uploaddir.basename($newfilename); // ./assets/1687517823.jpg



                    // method 3 (uniqid() uniqueဖြစ်တဲ့codeတွေထုတ်ပေးမှာ)
                    $getfilecode = uniqid()."_".time();
                    $getextension = pathinfo($filename,PATHINFO_EXTENSION); //jpg
                    $newfilename = $getfilecode.".".basename($getextension); // 64957e9a20439_1687518874.jp
                    $uploadfile = $uploaddir.basename($newfilename); // ./assets/64957e9a20439_1687518874.jp



                    $uploadtype = explode('.',$filename);
                    $uploadtype = strtolower(end($uploadtype));
                    $allowextensions = ['jpg','jpeg','png','gif'];

                    $filesize = $_FILES['profile']['size'][$x];
                    $filetmp = $_FILES['profile']['tmp_name'][$x];

                    $errors = [];

                    //check extension
                    if(in_array($uploadtype,$allowextensions) === false){
                        $errors = "Sorry, we just allowed JPG,JPEG,PNG & GIF files types.";
                    }

                    //check size
                    if($filesize > 3000000){
                        $errors[] = "Sorry, your file is too large";
                    }

                    //upload
                    if(empty($errors) === true){
                        move_uploaded_file($filetmp,$uploadfile);
                        $profile = $uploadfile; // ./assets/dog1.jpg
                        echo "File Successfully Uploaded";
                    }else{
                        echo "<pre>".print_r($errors,true)."</pre>";
                    }

                }

            }

            $firstname = $getfirstname;
            $lastname = $getlastname;
            $email = $getemail;
            $password = $getpassword;
            $dob = $getdob;
            $phone = $getphone;
            $address = $getaddress;
            $newsletter = $getnewsletter;

            $getdocuments = NULL;

            if(isset($_POST["documents"])){
                $docs = $_POST["documents"];

                foreach($docs as $doc){
                    $getdocuments .= $doc.",";
                    echo $getdocuments;
                }
            }

            $documents = $getdocuments;


            // $stmt->execute();
            // echo "New Records Created Successfully";

            if($stmt->execute()){
                // $_SESSION['email'] = $email;
                // $_SESSION['password'] = $password;
                // header("Location:./planncohomedecoration/index.php");

                setsession('email',$email);
                setsession('password',$password);
                redirectto('./planncohomedecoration/index.php');
            }else{
                echo "Try Again";
            }


        }catch(PDOException $e){
            echo "Error Found : " . $e->getMessage();
        }


        $conn = null; //db ကိုဒီမှာလာပိတ်ပေးရမယ် dbconnectမှာပဲ၁ခါထဲပိတ်ခဲ့လို့ရ အောက်ကprepare()လုပ်ဖို့ကို အလုပ်မလုပ်တော့လို့

    }



}

function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}


?>



<!-- 
CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    profile VARCHAR(255),
    firstname VARCHAR(20),
    lastname VARCHAR(20),
    email VARCHAR(30) UNIQUE,
    password VARCHAR(255),
    dob DATE,
    phone VARCHAR(13),
    address VARCHAR(100)
);

DESC users;
SHOW INDEX FROM users; -->

<!-- 16PG -->
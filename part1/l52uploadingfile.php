<?php


ini_set("display_errors",true);

// if(isset($_POST['submit'])){
//     // echo "Hay";

//     // fileတွေကိုဒီဘက်ကိုပြချင်တာက ဒီလိုပြလို့မရ fileမလို့
//    // $result = $_POST['profile'];
//     // echo $result;

//     // fileတွေကိုပြချင်ရင်ဒီလိုပြမှရမှာ
//     $result = $_FILES;
//     // echo $result; // arr အနေနဲ့ထုတ်ပေးလို့ ဒီလိုထုတ်လို့မရ
//     echo "<pre>".print_r($result,true)."</pre>";

    // echo $_FILES['profile']['name'];
    // echo "<br/>";
    // echo $_FILES['profile']['full_path'];
    // echo "<br/>";
    // echo $_FILES['profile']['type'];
    // echo "<br/>";
    // echo $_FILES['profile']['tmp_name'];
//     echo "<br/>";
//     echo $_FILES['profile']['error'];
//     echo "<br/>";
//     echo $_FILES['profile']['size']; //phpမှာ byteနဲ့ပြ
//     echo "<br/>";


//     $fileext = explode('.',$FILES['profile']['name']);

//     echo "<pre>".print_r($fileext,true)."</pre>";
//     echo $fileext[0]. "<br/>";
//     echo $fileext[1]. "<br/>";


//     $fileextname = current(explode('.',$FILES['profile']['name'])); //arrရဲ့ရှေ့ဆုံးမှာထွက်တာ arrခန်းမှာသွားကြည့်
//     echo $fileextname . "<br/>";

//     $fileextformat = end(explode('.',$FILES['profile']['name'])); //arrရဲ့နောက်ဆုံးဟာထွက်တာ arrခန်းမှာသွားကြည့်
//     echo $fileextformat . "<br/>";


// }




function getfilesize($filesize){
    // echo $filesize;

    if(is_numeric($filesize)){
        $idx = 0;
        $fixnum = 1024;
        $prefix = ["Bit","Kb","Mb","Gb","Tb","Pb","Eb","Zb"];
        
        // echo $prefix[$getsize];

        // while($filesize >= $fixnum && $idx < count($prefix)-1)
        while(($filesize/$fixnum) > 0.9){
            $filesize = $filesize/$fixnum;
            $idx++;
        }
        
        return round($filesize,2).' '.$prefix[$idx];

    }else{
        return "NaN";
    }
    

}

// echo getfilesize(700000000);


function getfilesizetwo($filesize){
    // return $filesize;

    $idx = 0;
    $fixnum = 1024;
    $prefix = ["B","Kb","Mb","Gb","Tb","Pb","Eb","Zb"];

    if($filesize < $fixnum){
        return $filesize. ' '.$prefix[$idx];
    }else{
        while($filesize > $fixnum){
            $filesize = round($filesize/$fixnum,2);
            $idx++;
        }
        return $filesize.' '.$prefix[$idx];
    }

}

// echo getfilesizetwo(30000000);

function getfilesizethree($filesize){
    $size = filesize($filesize);
    $fixnum = 1024;
    $prefix = ["B","Kb","Mb","Gb","Tb","Pb","Eb","Zb"];

    $power = $size > 0 ? floor(log($size,$fixnum)) : 0;
    // log(574,1024); //0.9164906926675
    // floor(log(574,1024)); //0

    $result = round($size / pow($fixnum,$power)). ' '. $prefix[$power];
            // 574/(1024/0)
            // 574/1 = 574
    return $result;

}

echo getfilesizethree('./l41userdeleteform.php');



// sudo chmod 777 -R assets/ (linux မှာ file uploadလုပ်တာကို နေရာရွေ့လို့မရလို့ permissionပေးတဲ့code)

// $uploaddir = "assets/";
// $uploadfile = $uploaddir.$_FILES['profile']['name'];
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']); //basename ကမပါလည်းရပေမယ့်ထည့်ပေးကြ ပိုသေချာ

// echo $uploadfile;


// move_uploaded_file(temp,actualpathandname)

// if(isset($_POST['submit'])){
//     if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//         echo "File Successfully Uploaded";
//     }else{
//         echo "Try again";
//     }
// }




// $uploaddir = "/C/xampp/htdocs/phpbatch3/part1/assets/";
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadsize = $_FILES['profile']['size'];

// if(isset($_POST['submit'])){


//     if($uploadsize > 30000){
//          echo "Sorry, Your file is too large";
//     }else{

//         if(file_exists($uploadfile)){
//             echo "Sorry, File already exists. ";
//          }else{
//             if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//                 echo "File Successfully Uploaded";
//             }else{
//                 echo "Try Again";
//             }
//          }

//     }

     

// }



// $uploaddir = "/C/xampp/htdocs/phpbatch3/part1/assets/";
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadsize = $_FILES['profile']['size'];
// $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
// $uploadfile . "<br/>";  // /C/xampp/htdocs/phpbatch3/part1/assets/
// echo $uploadtype;// .jpg
// if(isset($_POST['submit'])){

//     if($uploadtype !== 'jpg' && $uploadtype !== 'jpeg' && $uploadtype !== 'png' && $uploadtype !== 'gif'){
//         echo "Sorry, We just allowed for JPG,JPEG,PNG & GIF file types";
//     }else{

//         if($uploadsize > 30000){
//             echo "Sorry, Your file is too large";
//        }else{
   
//            if(file_exists($uploadfile)){
//                echo "Sorry, File already exists. ";
//             }else{
//                if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//                    echo "File Successfully Uploaded";
//                }else{
//                    echo "Try Again";
//                }
//             }
   
//        }
//     }
    

// }




// $uploaddir = "assets/"; // assetsရှေ့မှာ / မလို //assets ဆိုပြီးဖြစ်သွားမှာမလို့
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION)); //jpg png txt
// $uploadready = true;

// if(isset($_POST['submit'])){

//     // check file alaready exists or not
//     if(file_exists($uploadfile)){
//         echo "Sorry, file already exists <br/>";
//         $uploadready = false;
//     }

//     // check file size
//     if($_FILES['profile']['size'] > 30000){
//         echo "Sorry, your file is too large. <br/>";
//         $uploadready = false;
//     }

//     // check file format
//     if($uploadtype !== "jpg" && $uploadtype !== "jpeg" && $uploadtype !== "png" && $uploadtype !== "gif"){
//         echo "Sorry, we just allow JPG,JPEG,PNG & GIF files. <br/>";
//     }

//     // upload
//     if($uploadready){
//         if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//             echo "Uploaded Successfully";
//         }else{
//             echo "Uploading failed";
//         }
//     }else{
//         echo  "Sorry, your file was not uploaded";
//     }

// }


if(isset($_POST['submit']) && !empty($_FILES['profile']['name'])){
    // echo "Hello";

    $filename = $_FILES['profile']['name'];
    $filesize = $_FILES['profile']['size'];
    $filetmp = $_FILES['profile']['tmp_name'];

    $uploaddir = "assets/";
    $uploadfile = $uploaddir.basename($filename);
    $uploadtype = strtolower(end(explode('.',$filename))); //jpg

    $allowextensions = ["jpg","jpeg","png","gif"];

    if(isset($_FILES['profile'])){
        $errors = [];

        //check extension
        if(in_array($uploadtype,$allowextensions) === false){
            $errors[] = "Sorry, we just allow JPG,JPEG files type";
        }

        // check size
        if($filesize > 30000){
            $errors[] = "Sorry, your file is too large";
        }

        //upload file
        if(empty($errors) === true){
            move_uploaded_file($filetmp,$uploadfile);
            echo "File Successfully Uploaded.";
        }else{
            echo "<pre>".print_r($errors,true)."</pre>";
        }

    }



}




?>




<!DOCTYPE html>
<html>
<head>
    <title>Uploading File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <div class="col-md-6 mx-auto mt-5">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="profile">Profile Pictures</label>
                <input type="file" name="profile" id="profile" class="form-control" />
            </div>
            <input type="submit" name="submit" class="btn btn-primary float-end" value="Upload" />
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

<!-- 
bit 
byte 
kilo byte
mega byte 
giga byte 
tera byte 
peta byte
exa byte
zetta byte
yotta byte
-->


<!-- 
    1MB = 1024KB instead of 1000KB
01 base 2

2^0 = 1
2^1 = 2
2^2 = 4 -->




<?php

ini_set('display_errors',1); //error messageပြစေချင်ရင်သုံး ဒီတိုင်းပဲရေးရမယ်

// (i) MySQLi Procedural
// (ii) MySQLi Object-Oriented
// (iii) Using PDO (PHP Data Objects)  //securedပိုဖြစ်ဆုံး ပိုအသုံးတည့်


// (i) MySQLi Procedural
        // hostname(domainname)   username   password  databasename (အနည်းဆုံး၃ခုယူရမယ်)
$conn = mysqli_connect("localhost","root","","wdf7053");

if(mysqli_connect_error()){
    echo "Failed to connect :".mysqli_connect_error();
    exit();
}

echo "Connect Successfully";

echo "<hr/>";


// (variableကိုဒီတိုင်းလေးပဲသုံးဖို့ recomment ပေး)
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);

if(!$conn){
    // echo "Failed to connect :".mysqli_connect_error();
    // exist();

    die("Failed to connect :".mysqli_connect_error()); //errorထုတ်ပေးပြီး၁ခါထဲထွက်သွားမယ်
}

echo "Connect Successfully";

echo "<hr/>";


// (ii) MySQLi Object-Oriented (ဒီမှာမှားသွားရင် page ကြီး downမသွား error msgပဲမပြတာ)

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($dbhost,$dbuser,$dbpass);

if(mysqli_connect_error()){
    die("Failed to connect :".mysqli_connect_error());
}

echo "Connect Successfully";

echo "<hr/>";



$conn = new mysqli($dbhost,$dbuser,$dbpass,"wdf7053");

if($conn->connect_errno){
    echo "Failed to connect :". $conn->connect_errno;
    exit();
}

echo "Connect Successfully";

$conn->query("SELECT * FROM buyers"); //mysqlထဲကcodeတွေရေးချင်ရင် queryထဲရေး
echo $conn->affected_rows;

$conn->close(); //dbကိုပြန်ပိတ်ပေးရမယ်

echo "<hr/>";



function openconn(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";

    $dbconnect = new mysqli($dbhost,$dbuser,$dbpass);

    return $dbconnect;
}

function closeconn($conn){
    $conn->close();
}

$conn = openconn();
echo "Connect Successfully";
closeconn($conn);

echo "<hr/>";




// (iii) Using PDO (PHP Data Objects)

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wdf7053";

try{
    $conn = new PDO("mysql:host=$dbhost",$dbuser,$dbpass);
    // $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connect Successfully";
}
catch(PDOException $e){
    echo "Connection Failed : ". $e->getMessage();
}

echo "<hr/>";



?>
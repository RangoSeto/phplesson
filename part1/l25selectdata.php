<?php

ini_set('display_errors',1);

// =>MYSQLi Procedural 

$conn = mysqli_connect("localhost","root","","phpdbone");

if(mysqli_connect_error()){
    echo "Failed to connect to Mysql :". mysqli_connect_error();
    exit();
}

echo "Connect Successfully<br/>";

// Select Data
$sql = "SELECT id,firstname,lastname FROM students  WHERE id=5";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "id : ".$row['id']. " - Name : ".$row['firstname']." ".$row['lastname']."<br/>";
    }
}else{
    echo "No Result";
}

mysqli_close($conn);

echo "<hr/>";




// =>MySQLi Object-Oriented

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbtwo";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($conn->connect_error){
    die("Connection Failed :" . $conn->connect_error);
}

// Insert Data
// $sql = "SELECT id,firstname,lastname FROM students";
// $sql = "SELECT id,firstname,lastname FROM students WHERE lastname='hlaing'";
$sql = "SELECT id,firstname,lastname FROM students ORDER BY lastname";
$result = $conn->query($sql);

// echo "$result->num_rows"; //tableထဲမှာရှိတဲ့ dataအရေအတွက်

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "id : ".$row['id']. " - Name : ".$row['firstname']. " " . $row['lastname']."<br/>";
    }
}else{
    echo "No Result";
}

$conn->close();

echo "<hr/>";



// =>PDO

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbthree";

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT id,firstname,lastname FROM students");
    $stmt->execute();

    // while($row = $stmt->fetch()){
    //     echo "id : ".$row['id']. " - Name : ".$row['firstname']. " " . $row['lastname']."<br/>";
    // }

    foreach($stmt->fetchAll() as $row){
        echo "id : ".$row['id']. " - Name : ".$row['firstname']. " " . $row['lastname']."<br/>";
    }

    // fetch() က dataကို၁ခုုင်းစီထုတ်ပေးပြီး ကုန်ရင် falseထုတ်ပေးလိုက်တာ (၁ခုချင်းထုတ်ပေးလို့ while loopနဲ့ပတ်ရမယ်)
    // fetchAll() က dataတွေကို၁ခါတည်းအကုန်ထုတ်ပေးလို့ foreach နဲ့ပြန်ပတ်ပြီးထုတ်ပေးရမယ်
    // data အများကြီးထုတ်ရမယ်ဆို fetch()နဲ့ထုတ်တာက စက်ကိုသက်သာစေနိင်တယ်
    
}catch(PDOException $e){
    echo "Error Found : " .$e->getMessage();
}

$conn = null;

echo "<hr/>";






?>
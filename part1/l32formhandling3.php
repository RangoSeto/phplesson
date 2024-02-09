<?php

$name = $email = $password = $city = $favcolor = $bio ="";
$nameerr = $emailerr = $passworderr = $cityerr = $favcolorerr = $bioerr = "";


if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(empty($_POST["name"])){
        $nameerr = "Name is Required";
    }else{
        $name = textfilter($_POST["name"]);
    }

    if(empty($_POST["email"])){
        $emailerr = "Email is Required";
    }else{
        $email = textfilter($_POST["email"]);
    }

    if(empty($_POST["password"])){
        $passworderr = "Password is Required";
    }else{
        $password = textfilter($_POST["password"]);
    }

    if(empty($_POST["city"])){
        $cityerr = "City is Required";
    }else{
        $city = textfilter($_POST["city"]);
    }

    if(empty($_POST["favcolor"])){
        $favcolorerr = "Favcolor is Required";
    }else{
        $favcolor = textfilter($_POST["favcolor"]);
    }

    if(empty($_POST["bio"])){
        $bioerr = "Bio is Required";
    }else{
        $bio = textfilter($_POST["bio"]);
    }
    
}

function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data); //html code တွေကိုအထဲမှာအလုပ်မလုပ်စေချင်ရင်ပြောတာ codeလိုက်ကြီးပဲထွက်လာမယ်
    $data = stripslashes($data); //// slash(\) တွေပါရင်ဖြုတ်ပေး
    return $data;
}



?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Handling 3</title>
    <style type="text/css">
        .error{
            color: red;
        }
    </style>
</head>
<body>

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method ="POST">
        <div>
            <label for="name">Name</label>
            <span class="error">* <?php echo $nameerr; ?></span>
            <input type="text" name="name" id="name" class="" />
        </div>

        <div>
            <label for="email">Email</label>
            <span class="error">* <?php echo $emailerr; ?></span>
            <input type="text" name="email" id="email" class="" />
        </div>

        <div>
            <label for="password">Password</label>
            <span class="error">* <?php echo $passworderr; ?></span>
            <input type="password" name="password" id="password" class="" />
        </div>

        <div>
            <label for="city">City</label>
            <span class="error">* <?php echo $cityerr; ?></span>
            <input type="text" name="city" id="city" class="" />
        </div>

        <div>
            <label>Fav Color</label>
            <span class="error">* <?php echo $favcolorerr; ?></span>

            <input type="radio" name="favcolor" id="favrd" class="" value="Red Color" />
            <label for="favrd">Red</label>

            <input type="radio" name="favcolor" id="favgn" class="" value="Green Color" />
            <label for="favgn">Green</label>

            <input type="radio" name="favcolor" id="favbl" class="" value="Blue Color" />
            <label for="favbl">Blue</label>
        </div>

        <div>
            <label for="bio">Bio</label>
            <span class="error">* <?php echo $bioerr; ?></span>
            <textarea name="bio" id="bio" class="" rows="5" cols="50"></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>

    
    <?php

    echo "<h2>My Information Are...</h2>";
    echo "Name is $name <br/>";
    echo "Email is $email <br/>";
    echo "Password is $password <br/>";
    echo "City is $city <br/>";
    echo "Fav Color is $favcolor <br/>";
    echo "Bio is $bio <br/>";

    ?>

</body>
</html>
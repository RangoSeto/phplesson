<!DOCTYPE html>
<html>
<head>
    <title>Form Handling 1</title>
</head>
<body>
    <!-- <form action="./l30formdata1.php" method ="GET">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="" />
        </div>

        <div>
            <label for="city">City</label>
            <input type="text" name="city" id="city" class="" />
        </div>

        <button type="submit">Submit</button>
    </form> -->

    <form action="./l30formdata1.php" method ="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="" />
        </div>

        <div>
            <label for="city">City</label>
            <input type="text" name="city" id="city" class="" />
        </div>

        <button type="submit">Submit</button>
    </form>

</body>
</html>


<!-- get နဲ့ပို့ရင် get နဲ့ပဲဖမ်း -->

<!-- get -> form ရဲ့ url ကနေပို့တာ dataအများကြီးပို့လို့မရ ပို့ရတာမြန်တယ်secureတော့မဖြစ် passရေးရင်ဒီတိုင်းကြီးပေါ်နေမှာ
    (မြန်မြန်ပို့စရာဆို getနဲ့ပို့) -->

<!-- post -> body ထဲကဟာ uncryped လုပ်ပီးပို့တာ secureပိုဖြစ် add bar မှာမပေါ်လို့ dataအများကြီးပို့လို့ရ -->
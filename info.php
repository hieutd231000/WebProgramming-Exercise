<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey_info</title>
</head>
<body>
    <?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $class = $_POST["class"];
        $univer = $_POST["univer"];
        $code = $_POST["cost"];
        $phone = $_POST["phone"];
        $hobby = $_POST["hobby"];

        echo "Hello, " . $name;
        echo "<br>Your phone number: " .$code.$phone;
        echo "<br>You are studying at " . $class . ", " . $univer;
        if(isset($hobby)){
            echo "<br>You hobby is";
            echo "<ol>";
            foreach($hobby as $hobby_detail){
                echo "<li>$hobby_detail</li>";
            }
        }else echo "<br>You dont have hobby";
    }
    ?>
</body>
</html
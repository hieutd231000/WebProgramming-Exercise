<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert</title>
</head>
<body>
    <form method="post">
        <h1>Choose radian or degree</h1>
        <input type="radio" name="your_choose" value="1">
        <label for="radian">Radian</label><br>
        <input type="radio" name="your_choose" value="2">
        <label for="degree">Degree</label><br>
        <br>
        <input type = "text" name = "input" id = "input">
        <input type = "submit" name = "convert" id = "convert" value = "Convert">
    </form>
    <br>
    <?php
        $value = $_POST["your_choose"];
        function radianTodegree(){
            return $_POST["input"] * 180 / pi();
        }
        function degreeToradian(){
            return $_POST["input"] / 180 * pi();
        }
        if($value == 1){
            $result = radianTodegree();
            echo $_POST["input"]." radian = ".$result." degree";
        }else if($value == 2){
            $result = degreeToradian();
            echo $_POST["input"]." degree = ".$result." radian";
        }else   echo "You must select radian or degree";
    ?>
</body>
</html>
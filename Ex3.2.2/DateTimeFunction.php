<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date&Time</title>
</head>
<style>
    label{
        display: inline-block;
        width: 80px;
        text-align: right;
        padding-right: 20px;
    }
</style>
<body>
    <form action="Info.php" method="post">
    <label for = "name">Name 1: </label>
    <input type = "input" name = "name1"><br><br>

    <label for = "name">Birthday: </label>
    <input type = "input" name = "birth1"><br><br>

    <label for = "name">Name 2: </label>
    <input type = "input" name = "name2"><br><br>

    <label for = "name">Birthday: </label>
    <input type = "input" name = "birth2"><br><br> 

    <div style = "margin-left: 100px">
        <input type = "submit" name = "submit" value = "Submit">
        <input type = "reset" name = "reset" value = "Reset">
    </div>
    
    </form>
</body>
</html>
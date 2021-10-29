<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <style>
        .box {
            background-color: white;
			padding: 10px;
			margin: auto;
			margin-top: 50px;
			width: 40%;
			box-shadow: 0px 5px 5px grey;
        }   
        label{
            display: inline-block;
            width: 80px;
            text-align: right;
            padding-right: 20px;
        }
        #submit {
            margin: 20px 0px 15px 0px;
            font-size: 14px;
            padding: 5px 10px;
            text-transform: uppercase;
            cursor: pointer;
        }
    </style>
</head>
<body style = "background-color: #ebebeb">
    <div class = "box">
        <div class = "block" style = "text-align: center;">
            <h1>Survey Form</h1>
        </div>
            
        <form style = "padding-left: 20px" method = "post" action = "info.php">
            <div class = "block">
                <label for = "name">Name: </label>
                <input type = "text" name = "name"><br><br>
            </div>
            <div class = "block">
                <label for = "class">Class: </label>
                <input type = "text" name = "class"><br><br>
            </div>
            <div class = "block">
                <label for = "name">University: </label>
                <input type = "text" name = "univer"><br><br>
            </div>
            <div class = "block">
                <label for = "phone">Phone:</label>
                <input type = "text" name = "code" size = "2" value = "+84">
                <input type = "text" name = "phone"><br><br>
            </div>
            <div class = "block" style = "text-align: left">
                <label for = "gender">Gender:</label>
                <input type = "radio" name = "Male">
                <span>Male</span>
                <input type = "radio" name = "Female">
                <span>Female</span>
                <input type = "radio" name = "Other">
                <span>Other</span><br><br>
            </div>
            
            <div class = "block">
                <label for = "hobby">Hobby:</label>
                <input type="checkbox" id="hobby1" name="hobby[]" value="Listen to music">
                <span> Listen to music</span><br>
                <label></label>
                <input type="checkbox" id="hobby2" name="hobby[]" value="Watch to moviee">
                <span> Watch to movie</span><br>
                <label></label>
                <input type="checkbox" id="hobby3" name="hobby[]" value="Go swimming">
                <span> Go swimming</span><br><br>
            </div>
           
            <div class = "block">
                <label style = "vertical-align: top">Feedback:</label>
                <textarea name = "feedback" cols="25" rows="5"></textarea>
            </div>
            
            <div class = "block" style = "text-align: center"><input type="submit" id = "submit" name = "submit" value="submit"></div>
            
        </form>
    </div>
    <!-- Display information into info.php -->
    <?php
        include("/info.php");
    ?>
</body>
</html>